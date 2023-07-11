import requests
domain = 'change.domain.com'
myurl = 'http://' + domain + '/bridge.php'
print(myurl)
files = {'file': open('files.zip', 'rb')}
data = {'API': 'myapi'}
res = requests.post(myurl, data=data, files=files)

print(res.text)
