<!DOCTYPE html>
<html>
<head>
    
   
<title>CRUD de Arquivos</title>
    
   
<style>
       

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        form {
            margin-bottom: 20px;
        }
    </style>

</
</head>
<body>
    
   
<h1>CRUD de Arquivos</h1>
    
    <
<form action="upload.php" method="POST" enctype="multipart/form-data">
        
       
<input type="file" name="file" required>
        
       
<input type="submit" value="Upload">
    
   
</form>

    

   


<h2>Arquivos existentes:</h2>
    
   
<table>
        
       
<tr>
            
           
<th>Nome do Arquivo</th>
            
           
<th>Ações</th>
        
       
</tr>
        
       
<?php include 'read.php'; ?>
    </table>
</body>
</html>