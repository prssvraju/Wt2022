use DBI;
$con = DBI->connect('DBI:mysql:youth:localhost','root','')
or die "Unable to connect to mysql: $DBI::errstr\n";

$query = $con->prepare('select id, first_name,mobile from student');

$result = $query->execute()
or die "Unable to execute sql: $query->errstr";

while (($id, $name, $mobile) = $query->fetchrow_array())
{
 print "Id: $id Name: $name Mobile:$mobile\n";
}

$query->finish();