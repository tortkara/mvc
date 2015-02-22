#!/bin/bash

AppRootDir='../'
Param1="$1"
Param2="$2"
Param3="$3"

# Create project|model|view|controller
function create	{

if [ -n "$Param3" ] 
then


case "$Param2" in
	'project')
	echo "create project"
	;;
	'controller')
	create
	;;
	'view')
	create
	;;
	'model')
	create
	;;
	*)
	echo $"Usage: $0 {project|controller|view|model} name"
	exit 1
esac

else
	echo $"Usage: $0 {project|controller|view|model}"
	echo "$2"
fi


}


# Destroy project|model|view|controller
function destroy	{

	echo "destroy"
}


# lib add|remove|destroy
function lib {

	echo "lib"
}





# Command line options
# --------------------
# create project projectname
# destroy project projectname
# create controller|view|model controllername
# destroy controller|view|model controllername
# lib add libraryname
# lib remove libraryname
# lib list
case "$Param1" in
	'create')
	create
	;;
	'destroy')
	create
	;;
	'lib')
	create
	;;
	*)
	echo $"Usage: $0 {create|destroy|lib}"
	exit 1
esac
