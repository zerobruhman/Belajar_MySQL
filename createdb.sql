CREATE TABLE Siswa (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    nama VARCHAR(250) NOT NULL,
    umur INT,
    jurusan VARCHAR(3)
);
-- @block
INSERT INTO Siswa (nama, umur, jurusan)
VALUES 
    ("Jonathan", 18, "IPS"),
    ("Dio", 20, "IPA"),
    ("Joseph", 19, "IPA");

-- @block
SELECT * FROM Siswa;

-- @block
UPDATE Siswa
SET umur = 17
WHERE nama = "Jonathan";

--Buat kolom kelas
-- @block
ALTER TABLE Siswa
ADD kelas INT;
--Update Kelas
-- @block 
UPDATE Siswa SET kelas = 12 WHERE id = 1;
UPDATE Siswa SET kelas = 10 WHERE id = 2;
UPDATE Siswa SET kelas = 11 WHERE id = 3;
