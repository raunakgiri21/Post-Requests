function objectToFormData(obj) {
  const formData = new FormData();

  Object.entries(obj).forEach(([key, value]) => {
    formData.append(key, value);
  });

  return formData;
}

const myData = {
  "name": "RandomName",
  "code": "2833c15f7fcc3e02ab1b2cea8efda4bd",
};

const formData = objectToFormData(myData);

fetch("https://dev.29kreativ.com/recruitment/levels/", {
  method: "POST",
  body: formData,
  headers: {
    Authorization: "Bearer " + myData.code,
  },
})
  .then((response) => {
    return response.text()
  })
  .then((json) => console.log(json))
  .catch((err) => console.log(err));
