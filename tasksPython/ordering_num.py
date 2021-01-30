# Ordinal numbers indicate their position in a list, such as 1st or 2nd

nums = [1, 2, 3, 4, 5, 6, 7, 8, 9]

if nums:
    for num in nums:
        if num == 1:
            print(str(num) + "st")
        elif num == 2:
            print(str(num) + "nd")
        elif num == 3:
            print(str(num) + "rd")
        else:
            print(str(num) + "th")
else:
    print("The list of numbers is empty")

