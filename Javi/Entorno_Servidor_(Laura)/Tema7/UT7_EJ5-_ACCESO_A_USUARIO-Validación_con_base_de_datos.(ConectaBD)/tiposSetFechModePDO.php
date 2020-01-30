<?php
/*
PDO::FETCH_ASSOC: devuelve un array indexado por los nombres de las columnas del conjunto de resultados.

PDO::FETCH_BOTH (predeterminado): devuelve un array indexado tanto por nombre de columna, como numéricamente con índice de base 0 tal como fue devuelto en el conjunto de resultados.

PDO::FETCH_OBJ: devuelve un objeto anónimo con nombres de propiedades que se corresponden a los nombres de las columnas devueltas en el conjunto de resultados.

PDO::FETCH_LAZY: combina PDO::FETCH_BOTH y PDO::FETCH_OBJ, creando los nombres de la variables del objeto tal como se accedieron.

PDO::FETCH_INTO: actualiza una instancia existente de la clase solicitada, haciendo coincidir el nombre de las columnas con los nombres de las propiedades de la clase.

PDO::FETCH_BOUND: devuelve TRUE y asigna los valores de las columnas del conjunto de resultados a las variables de PHP a las que fueron vinculadas con el método PDOStatement::bindColumn().

PDO::FETCH_NAMED: devuelve un array con la misma forma que PDO::FETCH_ASSOC, excepto que si hubiera múltiples columnas con el mismo nombre, el valor al que hace referencia dicha clave será un array con todos los valores de la fila de tuviera ese nombre de columna.

PDO::FETCH_NUM: devuelve un array indexado por el número de columna tal como fue devuelto en el conjunto de resultados, comenzando por la columna 0.

PDO::FETCH_CLASS: devuelve una nueva instancia de la clase solicitada, haciendo corresponder las columnas del conjunto de resultados con los nombres de las propiedades de la clase, y llamando al constructor después, a menos que también se proporcione PDO::FETCH_PROPS_LATE. Si fetch_style incluye PDO::FETCH_CLASSTYPE (por ejemplo, PDO::FETCH_CLASS | PDO::FETCH_CLASSTYPE), entonces el nombre de la clase se determina a partir del valor de la primera columna.

PDO::FETCH_PROPS_LATE: cuando se usa con PDO::FETCH_CLASS, se llama al constructor de la clase antes de que las proiedades sean asignadas desde los valores de la columna respectiva.
*/

 ?>
