CREATE TABLE Usuario (
    id_usuario INT PRIMARY KEY,
    nombre VARCHAR(50),
    apellido VARCHAR(50),
    dni VARCHAR(20),
    correo VARCHAR(100),
    fecha_nacimiento DATE,
    telefono VARCHAR(15),
    rol_usuario VARCHAR(20),
    contraseña VARCHAR(255)
);


CREATE TABLE Medico (
    id_medico INT PRIMARY KEY,
    id_usuario INT,
    especialidad VARCHAR(50),
    FOREIGN KEY (id_usuario) REFERENCES Usuario(id_usuario)
);

CREATE TABLE Paciente (
    id_paciente INT PRIMARY KEY,
    id_usuario INT,
    FOREIGN KEY (id_usuario) REFERENCES Usuario(id_usuario)
);

CREATE TABLE Especialidad (
    id_especialidad INT PRIMARY KEY,
    nombre VARCHAR(50),
    descripcion TEXT
);

CREATE TABLE Consultas (
    id_consulta INT PRIMARY KEY,
    id_medico INT,
    id_paciente INT,
    motivo TEXT,
    tratamiento TEXT,
    fecha_consulta DATE,
    diagnostico TEXT,
    FOREIGN KEY (id_medico) REFERENCES Medico(id_medico),
    FOREIGN KEY (id_paciente) REFERENCES Paciente(id_paciente)
);

CREATE TABLE Cita (
    id_cita INT PRIMARY KEY,
    fecha DATE,
    id_paciente INT,
    id_medico INT,
    estado VARCHAR(20),
    descripcion TEXT,
    FOREIGN KEY (id_paciente) REFERENCES Paciente(id_paciente),
    FOREIGN KEY (id_medico) REFERENCES Medico(id_medico)
);
