CREATE TABLE IF NOT EXISTS 'kofxiii' (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'fighter' varchar(100) NOT NULL,
  'move' varchar(50) NOT NULL,
  'damage' int(11) DEFAULT NULL,
  'stun' int(11) DEFAULT NULL,
  'startup' varchar(11) DEFAULT NULL,
  'on_guard' varchar(11) DEFAULT NULL,
  'comments' varchar(255) DEFAULT NULL,
  PRIMARY KEY ('id')
)