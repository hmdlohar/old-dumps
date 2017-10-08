cd /home/hamid/FirefoxPortable/Data/profile/CookieSwap
var=10
while [ $var -lt 42 ]
do 
rm cookies_00$var.txt
touch cookies_00$var.txt
var=`expr $var + 1`
done