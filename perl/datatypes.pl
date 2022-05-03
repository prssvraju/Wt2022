#!/usr/bin/perl
print "Data types";
$scalar=100;
@myarr=(10,30,"Raghu"); 
%myassoc=("WT"=>"Web Technologies",
           "CN"=>"Computer Networks");
@subkeys=keys %myassoc;
@subnames=values %myassoc;
print "\nScalar : ".$scalar."\nArray : ".@myarr."\nAssoc Array : ".%myassoc{"WT"};
print "\nKey values are : @subkeys";
print "\nsubject values are : @subnames";
if(exists ($myassoc{"JP"}))
{
    print "\nElement Found";
}
else
{
    print "\nElement Not Found";
}

$myassoc{"JP"}="Java Program";

if(exists ($myassoc{"JP"}))
{
    print "\nElement Found";
}
else
{
    print "\nElement Not Found";
}

delete($myassoc{"JP"});

if(exists ($myassoc{"JP"}))
{
    print "\nElement Found";
}
else
{
    print "\nElement Not Found";
}
