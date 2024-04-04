# Trabalho 02 - Programação Orientada a Objetos para Web
### **Professor**: Ozeas Nobre
### **Aluno**: Renato Pejon Bessa

SQL para criação do Banco de Dados:
```sql
CREATE TABLE `trafalgar`.`consultas` 
(
    `id` INT(50) NOT NULL AUTO_INCREMENT ,
    `nome` VARCHAR(255) NOT NULL , 
    `cpf` VARCHAR(14) NOT NULL , 
    `email` VARCHAR(255) NOT NULL , 
    `telefone` VARCHAR(15) NOT NULL , 
    `data` DATE NOT NULL , 
    `horario` TIME NOT NULL , 
    PRIMARY KEY (`id`)
) 
ENGINE = InnoDB;
```

