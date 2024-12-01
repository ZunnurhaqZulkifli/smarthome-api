import os
import subprocess

def init():
    os.chdir('../../../../../')
    # process = subprocess.Popen(['/opt/homebrew/bin/restic', '-r', 'dev_backup', '--verbose', '--verbose', 'backup', 'development/laravel/not_work/pmx-backup'], stdin=subprocess.PIPE, stdout=subprocess.PIPE, stderr=subprocess.PIPE, text=True)

    # process.stdin.write("99x9")
    # process.stdin.flush()
    
    # output, error = process.communicate()
    # print("opt", output)

    # if error:
    #     print("Error:", error)

    os.chdir('')

    # os.system('ls -l')

    os.chdir('development/laravel/not_work/pmx-backup')

    current_dir = os.getcwd()

    print("Current directory:", current_dir)

init()