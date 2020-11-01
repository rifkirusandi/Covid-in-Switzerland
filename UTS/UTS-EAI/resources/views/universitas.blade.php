<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <meta charset="utf-8">
    <title>Universities | Indonesia</title>
    <style>
        body {
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        h1{
          color: #636b6f;
          font-family: 'Nunito', sans-serif;
          font-weight: 200;
          margin-top: 20px;
        }

        .univ{
          background-color: #fff;
          margin-top: 50px;
          width: 450px;
          height: 150px;
          border: 1px solid;
          border-radius: 25px;
        }
    </style>
  </head>
  <body>
    <center>
      <h1>Universities in Indonesia</h1>
      @foreach ($data as $item)
        <div class="univ">
          <br>
          <table>
            <tr>
              <td>University Name</td>
              <td>:</td>
              <td><?php echo $item['name'] ?></td>
            </tr>
            <tr>
              <td>University Domain</td>
              <td>:</td>
              <td><?php echo $item['domains'][0]?></td>
            </tr>
            <tr>
              <td>Alpha Two Code</td>
              <td>:</td>
              <td><?php echo $item['alpha_two_code']?></td>
            </tr>
            <tr>
              <td>Country</td>
              <td>:</td>
              <td><?php echo $item['country']?></td>
            </tr>
            <tr>
              <td>Web Pages</td>
              <td>:</td>
              <td><a href="<?php echo $item['web_pages'][0]?>"><?php echo $item['web_pages'][0]?></a></td>
            </tr>
          </table>
        </div>
      @endforeach;
    </center>
  </body>
</html>
