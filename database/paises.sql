USE celtatravel;

-- Continentes (ya deberían estar, pero por si acaso)
INSERT IGNORE INTO continentes (nombre) VALUES
('Europa'), ('América'), ('Asia'), ('África'), ('Oceanía');

-- Países
INSERT INTO paises (nombre, idContinente) VALUES
('España',        (SELECT id FROM continentes WHERE nombre = 'Europa')),
('Italia',        (SELECT id FROM continentes WHERE nombre = 'Europa')),
('Francia',       (SELECT id FROM continentes WHERE nombre = 'Europa')),
('Grecia',        (SELECT id FROM continentes WHERE nombre = 'Europa')),
('Escocia',       (SELECT id FROM continentes WHERE nombre = 'Europa')),
('Turquía',       (SELECT id FROM continentes WHERE nombre = 'Europa')),
('Japón',         (SELECT id FROM continentes WHERE nombre = 'Asia')),
('China',         (SELECT id FROM continentes WHERE nombre = 'Asia')),
('Tailandia',     (SELECT id FROM continentes WHERE nombre = 'Asia')),
('Jordania',      (SELECT id FROM continentes WHERE nombre = 'Asia')),
('Egipto',        (SELECT id FROM continentes WHERE nombre = 'África')),
('Marruecos',     (SELECT id FROM continentes WHERE nombre = 'África')),
('Kenia',         (SELECT id FROM continentes WHERE nombre = 'África')),
('Sudáfrica',     (SELECT id FROM continentes WHERE nombre = 'África')),
('México',        (SELECT id FROM continentes WHERE nombre = 'América')),
('Argentina',     (SELECT id FROM continentes WHERE nombre = 'América')),
('Perú',          (SELECT id FROM continentes WHERE nombre = 'América')),
('Brasil',        (SELECT id FROM continentes WHERE nombre = 'América')),
('Canadá',        (SELECT id FROM continentes WHERE nombre = 'América')),
('Australia',     (SELECT id FROM continentes WHERE nombre = 'Oceanía')),
('Nueva Zelanda', (SELECT id FROM continentes WHERE nombre = 'Oceanía'));
