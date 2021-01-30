def group_by_owners(files):
    result = {}

    for key, value in files.items():
        if value in result:
            result[value].append(key)
        else:
            result[value] = [key]

    return result

if __name__ == "__main__":
    files = {
        'Input.txt': 'Randy',
        'Code.py': 'Stan',
        'Output.txt': 'Randy'
    }
    print(group_by_owners(files))