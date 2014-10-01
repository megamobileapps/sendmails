require('aws-sdk')
var aws = require('aws-sdk')
aws.config.region='us-east-1'
var ses = new aws.SES()
ses.getSendQuota().send(function(){console.log(arguments)})
ses.getSendQuota().send(function(){console.log(arguments)})
aws.config
aws.config.credentialProvider
aws.config.credentialProvider.providers
aws.config.credentialProvider.providers[0]
aws.config.credentialProvider.providers[0]()
aws.config.credentialProvider.providers[1]()
aws.config.credentialProvider.providers[2]()
aws.config.credentialProvider.providers[3]()

var html_data="";
var ff = require('fs');
ff.readFile("data.mail.txt",function(){

html_data = arguments[1].toString();

var params = {
  Destination: { /* required */
    BccAddresses: [
    ],
    CcAddresses: [
    ],
    ToAddresses: [
      'goel74@yahoo.com'
    ]
  },
  Message: { /* required */
    Body: { /* required */
      Html: {
        Data: html_data, /* required */
        'Charset' : 'ISO-8859-1',
      },
      Text: {
        Data: 'Hello world from body text', /* required */
        'Charset' : 'ISO-8859-1',
      }
    },
    Subject: { /* required */
      Data: 'Hello World from nodejs sendmail function', /* required */
      'Charset' : 'ISO-8859-1',
    }
  },
  Source: 'pkgoel74@gmail.com', /* required */
  ReplyToAddresses: [
    'contact@uptoschoolworksheets.com'
  ],
  ReturnPath: 'contact@uptoschoolworksheets.com'
};

ses.sendEmail(params, function(err, data) {
  if (err){
	 console.log(err, err.stack); // an error occurred
  } else{
     console.log(data);           // successful response
  }
});

});

