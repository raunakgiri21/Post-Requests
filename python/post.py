import requests

url = "https://dev.29kreativ.com/recruitment/levels/"
name= "RandomName"
code= "2833c15f7fcc3e02ab1b2cea8efda4bd"

formData = {"name": name, "code": code}
headers = {"Authorization": f"Bearer {code}"}

res = requests.post(url,data=formData,headers=headers)

decoded_res = (res.content).decode("utf-8") # byte string to char string

print(decoded_res)