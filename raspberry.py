import sys,urllib2,urllib,time

counter = 0

while 1:   
	time.sleep(3)
	counter += 1
	var="etudiant "+str(counter)
	mydata=[('etudiant',var), ('date','2015-05-11'), ('heure','10:27:45')]
	mydata=urllib.urlencode(mydata)
	path=('http://localhost/applicationGet/index.php')
	req=urllib2.Request(path,mydata)
	page=urllib2.urlopen(req).read()
	print var