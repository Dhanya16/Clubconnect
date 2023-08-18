<head>
  <title>ClubConnect</title>
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f8f8;
      padding: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    th, td {
      padding: 10px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
      font-weight: bold;
    }

    tr:nth-child(even) {
      background-color: #f8f8f8;
    }

    tr:hover {
      background-color: #eaeaea;
    }

    .truncate {
      max-width: 150px;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
  </style>
  <script src="table2excel.js"></script>
</head>
<body>
  <table id="example-table">
    <thead>
      <tr>
        <th>Sl no</th>
        <th>Name</th>
        <th>USN</th>
        <th>Semester</th>
        <th>Branch</th>
        <th>Phone Number</th>
        <th>Hobbies</th>
        <th>Why Us?</th>
      </tr>
    </thead>
    @foreach ($registers as $register)
      @if(($register->clubs)=="flc")
            <tr>
                <td>{{ $register->id }}</td>
                <td>{{ $register->name }}</td>
                <td>{{ $register->usn }}</td>
                <td>{{ $register->sem }}</td>
                <td>{{ $register->branch }}</td>
                <td>{{ $register->phone }}</td>
                <td class="truncate">{{ $register->hobbies }}</td>
                <td class="truncate">{{ $register->reasons }}</td>
            </tr>
            @endif
        @endforeach
  </table>
  <button id="downloadexcel">Download Excel sheet</button>
  <script>
    document.getElementById('downloadexcel').addEventListener('click',function(){
      var table2excel = new Table2Excel();
      table2excel.export(document.querySelectorAll("#example-table"));
    })
  </script>
</body>
