from statistics import mean as m

admins = {'Python':'Pass123@','Kyle':'CSGCSG','Moe':'CSGCSG',}

studentDict = {'Jeff':[78,88,96],
               'Alex':[79,83,77],
               'Sam':[77,88,65],
               'Kyle':[78,56,93],
               'Joe':[78,81,92],}

def enterGrades():
    nameToEnter = input('Student Name: ')
    gradeToEnter = input('Grade: ')

    if nameToEnter in studentDict:
        print('Adding Grade...')
        studentDict[nameToEnter].append(int(gradeToEnter))
    else:
        print('Student does not exist.')
    print(studentDict)

def removeStudent():
    nameToRemove = input('What student do you want to remove ')
    if nameToRemove in studentDict:
        print('removing student...')
        del studentDict[nameToRemove]
        print(studentDict)

def studentAVGs():
    for eachStudent in studentDict:
        gradeList= studentDict[eachStudent]
        avgGrade = m(gradeList)

        print(eachStudent,'has an average grade of:', avgGrade)

def main():
    print("""
    Welcome to Moe University

    [1] - Enter Grades
    [2] - Remove Student
    [3] - Student Average
    [4] - Grade
    """)

    action = input('Hello Professor what would you like to do today? (Enter a number) ')

    if action == '1':
        enterGrades()
    elif action == ('2'):
        removeStudent()
    elif action == ('3'):
        studentAVGs()
    elif action == ('4'):
        exit()
    else:
        print('no valid choice was given, try again')

login = input('Username: ')
passw = input('Password: ')

if login in admins:
    if admins[login] == passw:
        print('Welcome,',login)
        while True:
            main()
        else:
            print('Invalid password, will detonate in 5 seconds!')
    else:
        print('invalid username, calling the RCMP to report this')
