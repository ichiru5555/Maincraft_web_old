from getpass import getpass
from python_aternos import Client
import sys

server = sys.argv[1]

user = ''
pswd = ''

atclient = Client()
aternos = atclient.account
atclient.login(user, pswd)

srvs = aternos.list_servers()
print(srvs)

myserv = srvs[server]

myserv.start()

print('completion')
