<?php
//Bài kiểm tra điểm thành phần 1

//Trắc ngiệm
//  1.      Array 
//          (
//             [0] => 1
//             [1] => 2
//             [2] => 3
//             [3] => 4
//             [4] => 5
//             [5] => 6
//             [6] => 9
//          )
// 2. A
// 3. A
// 4. A
// 5. B

//Tự luận
//C1
// Viết một chương trình PHP để hiển thị dãy số Fibonacci. Yêu cầu:
// Tạo một hàm generateFibonacci nhận một số nguyên dương n và trả về dãy số Fibonacci đầu tiên có n phần tử.
// Hiển thị dãy số Fibonacci đầu tiên có 10 phần tử.

function generateFibonacci($n){
    $array = [];

  for ($i = 0; $i < $n; $i++) {
    if ($i == 0 || $i == 1) {
      $array[] = $i;
    } else {
      $array[] = $array[$i - 1] + $array[$i - 2];
    }
  }

  return $array;
}

$result = generateFibonacci(10);
print_r($result);

//C2
// Viết một ứng dụng PHP để quản lý thông tin về học sinh trong một lớp học sử dụng mảng kết hợp. Yêu cầu:
// Tạo một mảng kết hợp chứa thông tin về học sinh với các khóa như id, name, age, và grade.
// Hiển thị thông tin của tất cả học sinh trong mảng.
// Viết hàm để tìm học sinh có điểm cao nhất (grade).
// Tạo mảng kết hợp chứa thông tin về học sinh
$students = [
    [
      "id" => 1,
      "name" => "Nguyễn Thị Hiên",
      "age" => 20,
      "grade" => 9,
    ],
    [
      "id" => 2,
      "name" => "Bùi Thị Hồng Hoa",
      "age" => 20,
      "grade" => 10,
    ],
    [
      "id" => 3,
      "name" => "Nguyễn Thị Mỹ Huyền",
      "age" => 20,
      "grade" => 9,
    ],
  ];
  
  // Hiển thị thông tin của tất cả học sinh trong mảng
  foreach ($students as $student) {
    echo "ID: " . $student["id"] . ", Tên: " . $student["name"] . ", Tuổi: " . $student["age"] . ", Điểm: " . $student["grade"] . "<br>";
  }
  
  // Viết hàm để tìm học sinh có điểm cao nhất
  function HSdiem_max(array $students): array {
    $diem_max = 0;
    $HSdiem_max = null;
  
    foreach ($students as $student) {
      if ($student["grade"] > $diem_max) {
        $diem_max = $student["grade"];
        $HSdiem_max = $student;
      }
    }
  
    return  $HSdiem_max;
  }
  
  // Tìm học sinh có điểm cao nhất và hiển thị thông tin của học sinh đó
  $HSdiem_max = HSdiem_max(array $students);
  echo "Học sinh có điểm cao nhất là: <br>";
  echo "ID: " .  $HSdiem_max["id"] . ", Tên: " .  $HSdiem_max["name"] . ", Tuổi: " .  $HSdiem_max["age"] . ", Điểm: " .  $HSdiem_max["grade"] . "<br>";
?>
