require "http"

url = "https://dev.29kreativ.com/recruitment/levels/"
name= "RandomName"
code= "2833c15f7fcc3e02ab1b2cea8efda4bd"

response = HTTP.auth("Bearer #{code}").post(url, :form => {'name' => name,'code' => code})

p response.body.readpartial
