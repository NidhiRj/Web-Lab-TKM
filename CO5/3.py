import csv
with open("trial_nidhi.csv","w",newline='') as file:
  write=csv.writer(file)
  write.writerow(["Sl No","Movie","Rating"])
  write.writerow(["1","Twilight","3"])
  write.writerow(["2","Loard of Rings","2"])

with open("trial_nidhi.csv") as csvfile:
 data=csv.reader(csvfile)
 for r in data:
     print(r)