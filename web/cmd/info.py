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
    print(srv.domain)
    print('ポート番号', srv.port)
    print(srv.motd)
    print('ステータス:', srv.status)
    print('名前:', srv.subdomain)
    print('Minecraftのソフトウェアとバージョン:', srv.software, srv.version)
    print('統合版:', srv.edition == atserver.Edition.bedrock)
    print('Java版:', srv.edition == atserver.Edition.java)

print()
