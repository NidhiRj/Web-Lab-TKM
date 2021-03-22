f=open("next.txt","r")
f1=open("newfile.txt","w")
r=f.readlines()
for i in range(0, len(r)):
	if(i%2!=0):
		f1.write(r[i])
	else:
		pass
f.close()
f1.close()
g=open("newfile.txt","r")
h=g.read()
print(h)
g.close()