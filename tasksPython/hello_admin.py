# the following program that simulates
# how websites ensure that everyone has a unique username

current_users = ["Alena", "Stan", "Sava", "Linda", "Lues", "Admin"]

new_users = ["Marta", "Sinol", "Sava", "Sergio", "Linda"]

# Say Hello!
for user in current_users:
    if user == "Admin":
        print("Hello, " + user + ". Would you like to check the current status?")
    else:
        print("\nHello", user, "! Thank you to log in.")

for user in new_users:
    if user in current_users:
        print(user, ", your profile has already existed...")
    else:
        print("Hello", user, "! Welcome!")




