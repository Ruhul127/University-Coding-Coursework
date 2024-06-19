#Software development 1 - coursework 1 Ruhul Amin w18206517
while True:
  try:
    Pass_Cred = int(input("Please enter your PASS credits: "))
    while Pass_Cred not in [0,20,40,60,80,100,120]:
      Pass_Cred = int(input("Out of range, Please enter your PASS credits: "))
    break
  except ValueError:
    print("Interger required")
#This will calculate the total pass credits.

while True:
  try:
    Defer_Cred = int(input("Please enter your DEFER credits: "))
    while Defer_Cred not in [0,20,40,60,80,100,120]:
      Defer_Cred = int(input("Out of range, Please enter your DEFER credits: "))
    break
  except ValueError:
    print("Interger required")
#This will calculate the total defer credits.

while True:
  try:
    Fail_Cred = int(input("Please enter your FAIL credits: "))
    while Fail_Cred not in [0,20,40,60,80,100,120]:
      Fail_Cred = int(input("Out of range, Please enter your FAIL credits: "))
    break
  except ValueError:
    print("Interger required")
#This will calculate the total fail credits.

Total_Cred = Pass_Cred + Defer_Cred + Fail_Cred            
if Total_Cred > 120:      
  print("Total incorrect ")
#This will make sure the total credits is the correct amount.

if Pass_Cred == 120:    
  print("Progress ")         
elif Pass_Cred == 100: 
  print("Progress (module trailer) ")
elif Pass_Cred == 80: 
  print("Do not Progress – module retriever ")
elif Pass_Cred == 60: 
  print("Do not Progress – module retriever ")
elif Pass_Cred == 40: 
  print("Do not progress - module retriever ")

if Defer_Cred == 120:    
  print("Do not progress - module retriever ")       
elif Defer_Cred == 100: 
  print("Do not progress - module retriever ")
elif Defer_Cred == 80: 
  print("Do not Progress – module retriever ")
elif Defer_Cred == 60:
  print("Do not Progress – module retriever")

if Fail_Cred == 120:      
  print("Exclude ")
elif Fail_Cred == 100:
  print("Exclude ")
elif Fail_Cred == 80:
  print("Exclude ")
elif Fail_Cred == 60:
  print("Do not Progress – module retriever ")
#This will make sure that the correct grades are handed out.

Cred_List = input("Would you like to enter more data? 'y' for Yes 'q' to Quit: ")
if Cred_List == "q":
  print(" ")
elif Cred_List == "y":
  print(" ")
  Pass_Cred = int(input("Please enter your PASS credits: "))
  while Pass_Cred not in [0,20,40,60,80,100,120]:
    Pass_Cred = int(input("Out of range, Please enter your PASS credits: "))
  Defer_Cred = int(input("Please enter your DEFER credits: "))
  while Defer_Cred not in [0,20,40,60,80,100,120]:
    Defer_Cred = int(input("Out of range, Please enter your DEFER credits: "))
  Fail_Cred = int(input("Please enter your FAIL credits: "))
  while Fail_Cred not in [0,20,40,60,80,100,120]:
    Fail_Cred = int(input("Out of range, Please enter your FAIL credits: "))

if Pass_Cred == 120:    
  print("Progress ")         
elif Pass_Cred == 100: 
  print("Progress (module trailer) ")
elif Pass_Cred == 80: 
  print("Do not Progress – module retriever ")
elif Pass_Cred == 60: 
  print("Do not Progress – module retriever ")
elif Pass_Cred == 40: 
  print("Do not progress - module retriever ")

if Defer_Cred == 120:    
  print("Do not progress - module retriever ")       
elif Defer_Cred == 100: 
  print("Do not progress - module retriever ")
elif Defer_Cred == 80: 
  print("Do not Progress – module retriever ")
elif Defer_Cred == 60:
  print("Do not Progress – module retriever")

if Fail_Cred == 120:      
  print("Exclude ")
elif Fail_Cred == 100:
  print("Exclude ")
elif Fail_Cred == 80:
  print("Exclude ")
elif Fail_Cred == 60:
  print("Do not Progress – module retriever ")