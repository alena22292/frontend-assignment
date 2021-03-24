# Main Python String Methods:
course = 'Python';

len() => number
course.upper()
course.lower()
course.title() => Capitalize the string
course.find() => index
course.replace() => a new String
'..' in course => True

# IF-ELSE condition:

good_credit = True
price = 1000000

one_percent = 0.2
second_percent = 0.1

if good_credit:
    total = price * second_percent
    print("The down payment", total)
else:
    total = price * one_percent
    print("The down payment", total)
print(f"Actually, you may use local variable outside the block code, here it is the value of total: ${total}")

# _________________________
# Convering the weight (kg and lb)
weight = input("Please inter your Weight ")
x = input("(K)-kg or (L)-lb ")

if x.lower() == "l":
    total = int(weight) * 0.45
    print(f"You weight in kg: {round(total)}")
elif x.lower() == "k":
    total = int(weight) * 2.2
    print(f"You weight in lb: {round(total)}")
else:
    print(f"Invalid input")

    