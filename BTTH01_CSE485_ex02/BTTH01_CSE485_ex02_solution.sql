--a, Liệt kê các bài viết về các bài hát thuộc thể loại Nhạc trữ tình
SELECT baiviet_data_data.tieude FROM baiviet_data_data INNER JOIN theloai_data on baiviet_data_data.ma_tloai = theloai_data.ma_tloai WHERE theloai_data.ten_tloai="Nhạc trữ tình";

--b, Liệt kê các bài viết của tác giả “Nhacvietplus”
SELECT * FROM baiviet_data_data INNER JOIN tacgia_data on baiviet_data_data.ma_tgia = tacgia_data.ma_tgia WHERE tacgia_data.ten_tgia = "Nhacvietplus";

--c, Liệt kê các thể loại nhạc chưa có bài viết cảm nhận nào
SELECT theloai_data.ten_tloai FROM theloai_data LEFT JOIN baiviet_data_data ON theloai_data.ma_tloai = baiviet_data_data.ma_tloai WHERE baiviet_data_data.ma_bviet IS NULL;

--d, Liệt kê các bài viết với các thông tin sau: mã bài viết, tên bài viết, tên bài hát, tên tác giả, tên thể loại, ngày viết
SELECT baiviet_data_data.ma_bviet, baiviet_data_data.tieude, baiviet_data_data.ten_bhat, tacgia_data.ten_tgia, theloai_data.ten_tloai, baiviet_data_data.ngayviet FROM baiviet_data_data INNER JOIN tacgia_data on baiviet_data_data.ma_tgia=tacgia_data.ma_tgia INNER JOIN theloai_data ON baiviet_data.ma_tloai=theloai_data.ma_tloai;

--e, Tìm thể loại có số bài viết nhiều nhất 
SELECT theloai_data.ma_tloai, theloai_data.ten_tloai, COUNT(*) as SoBV FROM theloai_data INNER JOIN baiviet_data ON theloai_data.ma_tloai=baiviet_data.ma_tloai GROUP BY theloai_data.ma_tloai, theloai_data.ten_tloai HAVING COUNT(*) >= ALL (SELECT COUNT(*) as SoBV FROM theloai_data INNER JOIN baiviet_data ON theloai_data.ma_tloai=baiviet_data.ma_tloai GROUP BY theloai_data.ma_tloai, theloai_data.ten_tloai);

--f, Liệt kê 2 tác giả có số bài viết nhiều nhất
SELECT tacgia_data.ten_tgia, COUNT(*) AS SoBV FROM baiviet_data INNER JOIN tacgia_data ON tacgia_data.ma_tgia=baiviet_data.ma_tgia GROUP BY tacgia_data.ten_tgia ORDER BY SoBV DESC LIMIT 2;

--g, Liệt kê các bài viết về các bài hát có tiêu đề bài viết hoặc tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”, “em” (2 đ)
SELECT * FROM baiviet_data WHERE baiviet_data.ten_bhat LIKE '%yêu%' OR baiviet_data.ten_bhat LIKE '%th??ng%' OR baiviet_data.ten_bhat LIKE '%anh%' OR baiviet_data.ten_bhat LIKE '%em%';

--h, Liệt kê các bài viết về các bài viet có tiêu đề bài viết hoặc tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”, “em” (2 đ)
SELECT * FROM baiviet_data WHERE baiviet_data.tieude LIKE '%yêu%' OR baiviet_data.tieude LIKE '%th??ng%' OR baiviet_data.tieude LIKE '%anh%' OR baiviet_data.tieude LIKE '%em%';

--i. Tạo 1 view có tên vw_Music để hiển thị thông tin về Danh sách các bài viết kèm theo Tên thể loại và tên tác giả
CREATE VIEW vw_Music AS SELECT baiviet_data.*, theloai_data.ten_tloai, tacgia_data.ten_tgia FROM baiviet_data INNER JOIN theloai_data ON baiviet_data.ma_tloai = theloai_data.ma_tloai INNER JOIN tacgia_data ON baiviet_data.ma_tgia = tacgia_data.ma_tgia;
