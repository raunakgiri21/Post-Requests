const request = require("request");

const myData = {
  name: "RandomName",
  code: "2833c15f7fcc3e02ab1b2cea8efda4bd",
};

request.post(
  {
    url: "https://dev.29kreativ.com/recruitment/levels/",
    form: myData,
    headers: {
      "Content-type": "multipart/form-date",
      Authorization: "Bearer " + myData.code,
    },
  },
  (error, response, body) => {
    console.log(body);
  }
);
