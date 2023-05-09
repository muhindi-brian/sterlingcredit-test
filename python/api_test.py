import requests
import json

endpoint = 'https://backgen.net/api/v1/users/info'

data = {
    'fullname': 'Brian Muhindi Mwangi',
    'email': 'brianmuhindi.job@gmail.com',
    'technical_skills': 'Nodejs, MERN Stack, Python',
    'soft_skills': 'consistency, listening skills, empathy'
}

headers = {
    'Content-Type': 'application/json',
    'Authorization': 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOjEsImlhdCI6MTY4MjQ5MjU1NywiZXhwIjoxNjgzMDk3MzU3fQ.Dm1CHdcvC9_wDcZswR8xsAdHHqc9c55ivEeCU9Qk_E4'
}

response = requests.post(endpoint, headers=headers, data=json.dumps(data))

print("Response code: {}".format(response.status_code))
print("Response body: {}".format(response.text))
