use DBI;
$con = DBI->connect('DBI:mysql:youth:localhost','root','');
$query = $con->prepare('SELECT VERSION()');
$result = $query->execute();
my $ver = $query->fetch();
print @$ver;
$query->finish();