<?php
/**
 * Mở kết nối đến CSDL sử dụng PDO
 */
function pdo_get_connection(){
    $dburl = "mysql:host=localhost;dbname=du_an1;charset=utf8";
    $username = 'root';
    $password = '';

    $conn = new PDO($dburl, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
}
/**
 * Thực thi câu lệnh sql thao tác dữ liệu (INSERT, UPDATE, DELETE)
 * @param string $sql câu lệnh sql
 * @param array $args mảng giá trị cung cấp cho các tham số của $sql
 * @throws PDOException lỗi thực thi câu lệnh
 */
function pdo_execute($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}
function pdo_execute_return_lastInsertId($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        return $conn->lastInsertId();
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}
/**
 * Thực thi câu lệnh sql truy vấn dữ liệu (SELECT)
 * @param string $sql câu lệnh sql
 * @param array $args mảng giá trị cung cấp cho các tham số của $sql
 * @return array mảng các bản ghi
 * @throws PDOException lỗi thực thi câu lệnh
 */
function pdo_query($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $rows = $stmt->fetchAll();
        return $rows;
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}
/**
 * Thực thi câu lệnh sql truy vấn một bản ghi
 * @param string $sql câu lệnh sql
 * @param array $args mảng giá trị cung cấp cho các tham số của $sql
 * @return array mảng chứa bản ghi
 * @throws PDOException lỗi thực thi câu lệnh
 */
function pdo_query_one($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}
/**
 * Thực thi câu lệnh sql truy vấn một giá trị
 * @param string $sql câu lệnh sql
 * @param array $args mảng giá trị cung cấp cho các tham số của $sql
 * @return giá trị
 * @throws PDOException lỗi thực thi câu lệnh
 */
function pdo_query_value($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return array_values($row)[0];
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}
// pdo_get_connection: Hàm này mở kết nối đến cơ sở dữ liệu và trả về đối tượng PDO để sử dụng trong các thao tác khác.

// pdo_execute: Hàm này thực thi các câu lệnh SQL thao tác dữ liệu như INSERT, UPDATE, DELETE. Nó nhận một câu lệnh SQL và các tham số cho câu lệnh đó.

// pdo_execute_return_lastInsertId: Tương tự như pdo_execute, nhưng nó còn trả về ID của bản ghi vừa được thêm vào (lastInsertId).

// pdo_query: Thực hiện câu lệnh SQL truy vấn dữ liệu và trả về một mảng chứa tất cả các bản ghi từ kết quả truy vấn.

// pdo_query_one: Thực hiện câu lệnh SQL truy vấn dữ liệu và trả về một mảng chứa một bản ghi từ kết quả truy vấn.

// pdo_query_value: Thực hiện câu lệnh SQL truy vấn dữ liệu và trả về một giá trị từ kết quả truy vấn.