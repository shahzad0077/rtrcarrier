<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        body{
        padding: 0px;
        margin: 0px;
        box-sizing: border-box;     
    }
    *{
        font-family: sans-serif;
    }
     .container{
            margin: auto;
            background-color: #fff;
            padding: 40px 50px 0px 50px;
        }
     .logo img{
        height: 75px;
     }
.heading{
    display: flex;
    justify-content: end;
    padding-right: 75px;
    text-transform: uppercase;
    position: relative;
    font-size: 40px;
    font-weight: bold;
}
      .heading:before {
        content: "";
        display: block;
        width: 660px;
        height: 32px;
        background:#18A4DE;
        left: 0;
        top: 15%;
        left: -50px;
        position: absolute;
      }
      .heading:after {
        content: "";
        display: block;
        width: 100px;
        height: 32px;
        background:#18A4DE;
        right: 0;
        top: 15%;
        right: -50px;
        position: absolute;
      }
     .personal-info{
      margin-top: -30px;
     } 
     .address{
        margin-top: -15px;
       font-weight: 600;
       font-size: 16px;
       opacity: 0.6;
     }
     .personal-info{
        display: flex;
        justify-content: space-between;
     }
   .info-right span{
        margin-left: 30px;
        opacity: 0.5;
        font-size: 16px;
        font-weight: bold;
     }
     .info-right{
        line-height: 10px;
        margin-top: 20px;
     }
     table {
  border-collapse: collapse;
  width: 100%;
} 
 th { 
  text-align: left;
  padding: 18px;
  background-color: black;
  color: #f1f1f1;
}
td{
    border: 1px solid lightgrey;
    text-align: left;
    padding: 18px;
    font-size: 15px;
    font-weight: bold;
    opacity: 0.5;
}
tr:nth-child(even){
    background-color: rgb(235, 235, 235);
}
.end{
    display: flex;
    justify-content: space-between;
}
.left h3{
    font-weight: bold;
    font-size: 20px;
}
.left{
    width: 50%;
}
.right{
    width: 50%;
   text-align: end;
   padding-top: 30px;
}
.right span{
    padding-left: 60px;
    font-size: 20px;
}
.total-price h2{
    background-color: #18A4DE;
   padding: 5px 10px 5px 0px;
}
.total-price h2 span{
  padding-left: 50px;
}
.end{
  padding-bottom: 70px;
}
@media screen and (min-width:2000px) and (max-width:2300px){
  .total-price h2{
    background-color: #18A4DE;
   padding: 10px 20px 10px 0px;
}
  .heading {
    display: flex;
    justify-content: end;
    padding-right: 85px;
    text-transform: uppercase;
    position: relative;
    font-size: 40px;
    font-weight: bold;
}
.heading:before {
    content: "";
    display: block;
    width: 1080px;
    height: 32px;
    background: #18A4DE;
    left: 0;
    top: 15%;
    left: -50px;
    position: absolute;}
    .heading:after {
    content: "";
    display: block;
    width: 115px;
    height: 32px;
    background: #18A4DE;
    right: 0;
    top: 15%;
    right: -50px;
    position: absolute;
}
}

    </style>
</head>
<body style="background-color: #f8f8f8;">
    <div class="main">
    <div class="container">
    <div class="logo">
        <img src="https://i0.wp.com/classaclub.com/wp-content/uploads/2022/03/logo.png">
        </div>  
        <h1 class="heading">invoice</h1>
        <div class="personal-info">
            <div class="info-left">
            <h2>Invoice To:
            </h2>
            <h3>{{ $user->name }}</h3>
            </div>
            <div class="info-right">
              <h3>Invoice# <span>RTR00{{ $data->id }}</span></h3>
              <h3>Date <span>{{ $data->created_at }}</span></h3>
            </div>
        </div>
        <table>
            <tr>
              <th>Item Description</th>
              <th>Price</th>
              <th>Qty.</th>
              <th>Total</th>
            </tr>
            <tr>
              <td>{{ DB::table('subscription_plans')->where('id' , $data->plan_id)->first()->name  }}</td>
              <td>${{ $data->amount }}</td>
              <td>1</td>
              <td>${{ $data->amount }}</td>
            </tr>
          </table>
       <div class="end">
        <div class="left">
            <h2>Thank You For Your Business</h2>
        </div>
        <div class="right">
            <h2 class="sub">Sub Total: <span>${{ $data->amount }}</span></h2>
            <div class="total-price">
            <h2 >Total: <span>${{ $data->amount }}</span></h2>
            </div>
        </div>
       </div>  
  </div>
  </div>
  
</body>
</html>