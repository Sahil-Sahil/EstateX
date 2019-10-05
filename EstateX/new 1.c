#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <unistd.h>
#include <sys/wait.h>
#include <wordexp.h>
#include <ctype.h>

int ShowHistory(char *History[], int Curr){
	int i = Curr;
	int num=1;
	do{if(History[i]){	fprintf(stdout,"%4d %s\n",num,History[i]);	num++;	}
		i = (i+1) % 1000;
	}while(i != Curr);
	return 0;

}


int main(char * argv[])
{
	char *History[1000];
	FILE *fp;
	char *temp[1000];
	char* EnvVar = getenv("HOME");
	char cmd[1000];
	char Compile[1000];
	int Curr = 0;
	int Stat;
	char cmd2[1000];	
	wordexp_t expanList;
	int i,j;
	int result;
	

	for(i=0;i<1000;i++)
	{History[i]=NULL;}

	while(1)
  	{
		fprintf(stdout,"<SHELL>::");
		fgets(cmd,sizeof(cmd),stdin);
		cmd[strlen(cmd)-1]='\0';
		if(feof(stdin)) break; 
	
		
		result=wordexp(cmd,&expanList, WRDE_SHOWERR);

		History[Curr] = strdup(cmd); //stores the command for displaying when MaximunDaysBookAllowed is called;
		Curr = (Curr+1) % 1000;

		//I was not able to as mentioned in the 
		//assignment but what I did is took a null("") 
		//char after the '!' and took the following string as argument
		if(strcmp(expanList.we_wordv[0],"!")==0)
		{
			strcpy(cmd,History[atoi(expanList.we_wordv[1])-1]);

			system(cmd);
			continue;
	
		}

		//Check if the line is a comment
		if(cmd[0]=='#') continue;
		strcpy(cmd2,expanList.we_wordv[0]);
		//fprintf(stdout,"%s\n",cmd2);
		if((strcmp(expanList.we_wordv[0],"hi")==0)||(strcmp(cmd,"hi") == 0))
               	{
			fprintf(stdout,"%s\n",expanList.we_wordv[0]);
			fprintf(stdout,"Hi %s  hows it goin\n",getenv("USER"));
                	continue;
                }
		//Checks for the command 'cd'
		if((strcmp(expanList.we_wordv[0],"cd")==0)|| ((strcmp(cmd,"cd")==0))) 
               	{
			//fprintf(stdout,"%s\n",cmd2);
			int ret;
			if(expanList.we_wordv[1]==NULL)
			{
			//	fprintf(stdout,"Hello World\t%s\n",cmd2);
				ret = chdir(EnvVar);
				strcpy(cmd,"pwd");
				continue;
			}
			if(strcmp(expanList.we_wordv[1],"-")==0)
			{
				ret = chdir("..");
				strcpy(cmd,"pdw");
				continue;
			}
			ret = chdir(expanList.we_wordv[1]);
			strcpy(cmd,"pwd");
                	continue;
		}
		
		//checks MaximunDaysBookAllowed and its features
		if((strcmp(expanList.we_wordv[0],"MaximunDaysBookAllowed")==0)|| (strcmp(cmd,"MaximunDaysBookAllowed")==0))
               	{

			if(expanList.we_wordc>1)
			{
				i = Curr - atoi(expanList.we_wordv[1]);
				
				while(i!=Curr)
				{
					fprintf(stdout,"%4d %s\n",i+1,History[i]);
					i++;
				}
				continue;
			}
			else
			{
				ShowHistory(History,Curr);
				continue;
			}
			continue;
		}

		//Compiling function
		if(cmd2[strlen(cmd2)-1]=='c'&&cmd2[strlen(cmd2)-2]=='.')
		{
			strcpy(Compile,"gcc -g -std=gnu99 -o a ");
			strcpy(cmd2,cmd);
			strcat(Compile,cmd2);
			fprintf(stdout,"%s\n",Compile);
			system(Compile);
			if(system(Compile)==0)
			{
				system("./a");
			}
			continue;
		}

		//Save History feature; what we do over here is open a filw in write mode to write the cmd in the file.
		if(strcmp(expanList.we_wordv[0],"saveHistory")==0)
		{
			fp = fopen("MyHist","w");
			
			for(i=1;i<=Curr-1;i++)
			{
				fprintf(fp,"%4d %s\n",i,History[i]);
			}
			fclose(fp);
			continue;
		}

     		if(strcmp(expanList.we_wordv[0],"exit")==0) 
        	exit( expanList.we_wordc>1 ?
              	atoi(expanList.we_wordv[1]): 0);

		switch(fork())
		{
			case 0:  //We are in the child
			execvp(expanList.we_wordv[0],expanList.we_wordv);
			return -1; //Failed to exec

			case -1:  perror("Failed to fork");
             		break;

       			default: 
               		wait(&Stat); 
               		wordfree(&expanList);

      		}
     		fprintf(stdout,"Status of command is: %d\n",Stat>>8);   
	}
	return 0;

}
