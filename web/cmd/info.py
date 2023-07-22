from getpass import getpass
from python_aternos import Client, atserver

user = ''
pswd = ''

atclient = Client()
aternos = atclient.account
atclient.login(user, pswd)

srvs = aternos.list_servers()

for srv in srvs:
    print()
    srv.fetch()
    print('ドメイン名: ', srv.domain)
    print('<br>')
    print('ポート番号: ', srv.port)
    print('<br>')
    print('ステータス:', srv.status)
    print('<br>')
    print('Minecraftのソフトウェアとバージョン:', srv.software, srv.version)
    print('<br>')
    print('統合版: ', srv.edition == atserver.Edition.bedrock)
    print('<br>')
    print('Java版: ', srv.edition == atserver.Edition.java)
    print('<br>')
    print('<br>')

print()
