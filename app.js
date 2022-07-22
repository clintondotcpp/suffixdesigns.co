const express = require('express'); //include the express framework
const request = require('request');
const bodyParser = require('body-parser');
const path = require('path'); //to deal with file paths


//initialize our express app

const app = express();

//Body Parser Middleware
app.use(bodyParser.urlencoded({extended: true}))

//Static folder
app.use(express.static(path.join(__dirname,'')));

//Signup Route
app.post('/signup',(req,res)=>{
    const {email} = req.body;
   
    //make sute fields are filled
    if(!email){
        res.redirect('/emailfail.html');
        return;
    }

    //Construct req data
    const data = {
        members: [
            {
                email_address: email,
                status: 'subscribed',
                merge_fields: {
                    FNAME: '',
                    LNAME: ''
                }

                
            }
        ]
    };
    const postData = JSON.stringify(data);
    //Make a request to MAILCHIMP API
    const options ={
        url: 'https://us12.api.mailchimp.com/3.0/lists/cd829a4558',
        method: 'POST',
        headers: {
            Authorization: 'auth a830a7a594f24814b47669e20adaeeea-us12'
        },
        body: postData
    };

    request(options, (err, response, body)=>{
        if(err){
            res.redirect('/emailfail.html');
        }else{
            if(response.statusCode === 200){
                res.redirect('/emailsuccess.html');
            }else{
                res.redirect('/emailfail.html');
            }
        }
    });
})

//initialize the port
const PORT = process.env.PORT || 5000  //tHIS our port TODO
app.listen(PORT, console.log(`Server started on ${PORT}`)); //this will start our server

