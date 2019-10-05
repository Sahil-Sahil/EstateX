#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <math.h>
#include <errno.h>
#include <unistd.h>
#include <time.h>
#include <sys/time.h>
#include <sys/wait.h>
#include <sys/times.h>
#include <sys/stat.h>
#include <signal.h>
#include <unistd.h>
#include <wordexp.h>


long double doCalc()
{
    long double SNum=0;
    int i,j,k;
    for(i=1;i<20;i++)
    {  	for(j=1;j<1000;j++)	{  for(int k=1;k<25;k++) { chmod("1D.c",0666); }
	    SNum+=sqrt(sqrt(sqrt(sqrt((double)5000000000000)))); } usleep(10000);   }
		return SNum;
    }


//shows the history 
int ShowHistory(char *History[], int current)
{int i = current;
	int num=1;
	do	{if(History[i])	{fprintf(stdout,"%4d %s\n",num,History[i]);	num++;	}
		i = (i+1) % 1000;
	}	while(i != current);
		return 0;
}

int main(char * argv[])
{
	char *History[1000];
	char * Temp[1000];
	FILE *fp;
	char* EnvVar = getenv("HOME");
	wordexp_t ExpansList;
    int current = 0;
	int Status;	
	char cmd[1000];
	char compile[1000];
	char cmd2[1000];	
	int Res;
	struct timeval Bef,after,Diff;
	struct tms processingTime;
	int i,j;

	gettimeofday(&Bef,NULL);

	for(i=0;i<1000;i++)
	{History[i]=NULL;}

	while(1)
  	{
		fprintf(stdout,"<SHELL>::");
		fgets(cmd,sizeof(cmd),stdin);
		cmd[strlen(cmd)-1]='\0';
		if(feof(stdin)) break;
	
		Res=wordexp(cmd,&ExpansList, WRDE_SHOWERR);
		// Stores the command we runned
		History[current] = strdup(cmd);
		current = (current+1) % 1000;

		if(strcmp(ExpansList.we_wordv[0],"!")==0)
		{
			strcpy(cmd,History[atoi(ExpansList.we_wordv[1])-1]);
			Res=wordexp(cmd,&ExpansList, WRDE_SHOWERR);
		}

		// tells us if line is a comment or code
		if(cmd[0]=='#') continue;
		
		if((strcmp(ExpansList.we_wordv[0],"hi")==0))
               	{
			fprintf(stdout,"%s\n",ExpansList.we_wordv[0]);
			fprintf(stdout,"Hi %s  hows it goin\n",getenv("USER"));
                	continue;
                }
		// Looks for the cd command 
		if((strcmp(ExpansList.we_wordv[0],"cd")==0))
               	{
			int ret;
			if(ExpansList.we_wordv[1]==NULL)
			{
				ret = chdir(EnvVar);
				strcpy(cmd,"pwd");
				continue;
			}
			if(strcmp(ExpansList.we_wordv[1],"-")==0)
			{
				ret = chdir("..");
				strcpy(cmd,"pdw");
				continue;
			}
			ret = chdir(ExpansList.we_wordv[1]);
			strcpy(cmd,"pwd");
                	continue;
		}
		
		//History
		if((strcmp(ExpansList.we_wordv[0],"history")==0))
               	{

			if(ExpansList.we_wordc>1)
			{
				i = current - atoi(ExpansList.we_wordv[1]);
				
				while(i!=current)
				{
					fprintf(stdout,"%4d %s\n",i+1,History[i]);
					i++;
				}
				continue;
			}
			else
			{
				ShowHistory(History,current);
				continue;
			}
			continue;
		}

		if(strcmp(ExpansList.we_wordv[0],"umask") == 0)
    		{
       			if(strlen(ExpansList.we_wordv[0]) >= 5)
       			{
         			int Res = 0;
         			sscanf(ExpansList.we_wordv[1],"%o",&Res);
         			umask(Res);  
       			}
    		}

		if(strcmp(ExpansList.we_wordv[0],"TIME") == 0)
		{
		        gettimeofday(&after,NULL);
		        times(&processingTime);
               
		        Diff.tv_sec=after.tv_sec-Bef.tv_sec;
		        fprintf(stdout,"\nTime sinced Shell started: %ld seconds",Diff.tv_sec);
		        fprintf(stdout,"\nChildrean 'User Time' %lf seconds",(double)processingTime.tms_cutime/100.0);
		  	fprintf(stdout,"\nChildrean 'System Time': %lf seconds\n",(double)processingTime.tms_cstime/100.0);
    		}


		//Compiling function
		if(ExpansList.we_wordv[0][strlen(ExpansList.we_wordv[0])-1]=='c'&&ExpansList.we_wordv[0][strlen(ExpansList.we_wordv[0])-2]=='.')
		{
			for(i=0;i<strlen(ExpansList.we_wordv[0])-2;i++)
			{ cmd2[i] = cmd[i];	}	

			sprintf(compile,"gcc -g -std=gnu99 -Wformat %s -o %s",cmd,cmd2);
			fprintf(stdout,"Compiling: %s\n",compile);
			system(compile);
			continue;
		}
		if(strcmp(ExpansList.we_wordv[0],"a.out")==0)
		{system(cmd2);	}

		//Opening a history file
		if(strcmp(ExpansList.we_wordv[0],"saveHistory")==0)
		{
			fp = fopen("HistF","w");
			fprintf(fp,"#!./forkingshell\n");
			for(i=1;i<=current-2;i++)
			{	fprintf(fp,"%4d %s\n",i,History[i]);}
			fclose(fp);
			chmod("HistF",S_IRWXU);
			continue;
		}

		if(strcmp(ExpansList.we_wordv[0],"forkshell") == 0)
  		{
		      char get_exe_cmd[100],save_cmd[20];
		      int cnt = 0;
		      fp = fopen(ExpansList.we_wordv[0],"r");
		      if(fp == NULL){ perror("fp"); }
     
		      while(!feof(fp))
		      {
			         fgets(get_exe_cmd,100,fp);
			         if(strcmp(get_exe_cmd,"#!./forkingshell") != 0)
			         {
			              for(int i=0; i < strlen(get_exe_cmd);i++)
					{
                   				if(get_exe_cmd[i] == '#'){ break; }
				                   save_cmd[i] = get_exe_cmd[i];
					}
		      system( save_cmd );
               	      int CNT = 0;
               	      while(save_cmd[CNT] != '\0'){ save_cmd[CNT] = '\0'; CNT++; }
           			}
         		}
      		fclose(fp);	
  		}


     		if(strcmp(ExpansList.we_wordv[0],"exit")==0) 
        	exit( ExpansList.we_wordc>1 ?
              	atoi(ExpansList.we_wordv[1]): 0);

		switch(fork())
		{
			case 0: 
			execvp(ExpansList.we_wordv[0],ExpansList.we_wordv);
			return -1; 
			case -1:  perror("Failed to fork");
             		break;
   			default: 
               		wait(&Status); 
               		wordfree(&ExpansList);
      		}
     		fprintf(stdout,"Command Status: %d\n",Status>>8);   
	}
	return 0;

}