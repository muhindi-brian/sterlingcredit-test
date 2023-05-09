const axios = require('axios');

const endpoint = 'https://backgen.net/api/v1/users/info';
const token = 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOjEsImlhdCI6MTY4MjQ5MjU1NywiZXhwIjoxNjgzMDk3MzU3fQ.Dm1CHdcvC9_wDcZswR8xsAdHHqc9c55ivEeCU9Qk_E4';
const data = {
    fullname: 'Brian Muhindi Mwangi',
    email: 'brianmuhindi.job@gmail.com',
    technical_skills: 'Nodejs, MERN Stack, Python',
    soft_skills: 'consistency, listening skills, empathy',
};

axios
    .post(endpoint, data, {
        headers: {
            Authorization: token,
        },
    })
    .then((response) => {
        console.log(`Response status code: ${response.status}`);
        console.log(`Response body: ${JSON.stringify(response.data)}`);
    })
    .catch((error) => {
        console.log(`Error status code: ${error.response.status}`);
        console.log(`Error message: ${error.response.data}`);
    });