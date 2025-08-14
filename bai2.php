<?php

$conn = mysqli_connect(
    "sql212.infinityfree.com",
    "if0_39693676",
    "nguyenduyduc123",
    "if0_39693676_baitap_venha"
) or die("Can't not connect to database");


$books = [];
for ($i = 1; $i <= 100; $i++) {
    $books[] = [
        "ten" => "Tensach$i",
        "noidung" => "Noidung$i"
    ];
}


$rowsPerPage = 10;
$totalBooks = count($books);
$totalPages = ceil($totalBooks / $rowsPerPage);


$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1) $page = 1;
if ($page > $totalPages) $page = $totalPages;


$start = ($page - 1) * $rowsPerPage;
$currentBooks = array_slice($books, $start, $rowsPerPage);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Danh sách </title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        .pagination {
            text-align: center;
            margin-top: 10px;
        }
        .pagination a {
            margin: 0 5px;
            text-decoration: none;
            padding: 5px 10px;
            border: 1px solid #333;
        }
        .pagination a.active {
            background-color: #333;
            color: white;
        }
    </style>
</head>
<body>

<h2 style="text-align:center">Danh sách sách</h2>
<table>
    <tr>
        <th>STT</th>
        <th>Tên sách</th>
        <th>Nội dung sách</th>
    </tr>
    <?php foreach ($currentBooks as $index => $book): ?>
        <tr>
            <td><?php echo $start + $index + 1; ?></td>
            <td><?php echo $book['ten']; ?></td>
            <td><?php echo $book['noidung']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<div class="pagination">
    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <a href="?page=<?php echo $i; ?>" class="<?php echo ($i == $page) ? 'active' : ''; ?>">
            <?php echo $i; ?>
        </a>
    <?php endfor; ?>
</div>

</body>
</html>
