<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subjects= [
            ['code' => 'IC1222',  'name' => 'FUNDAMENTOS DE LA INFORMATICA','avr' => 'Fun.Inf.', 'u_c' => 0,'h_s' => 4,'pensum_id'=> 1,'level' => 1,'departament_id' => 2],
            ['code' => 'IM1223',  'name' => 'LOGICA MATEMATICA','avr' => 'Log.Mat.', 'u_c' => 0,'h_s' => 4,'pensum_id'=> 1,'level' => 1,'departament_id' => 2],
            ['code' => 'IM1421',  'name' => 'MATEMATICA I','avr' => 'Mat.I', 'u_c' => 0,'h_s' => 6,'pensum_id'=> 1,'level' => 1,'departament_id' => 2],
            ['code' => 'IB2322',  'name' => 'FISICA I','avr' => 'Fis.I', 'u_c' => 0,'h_s' => 5,'pensum_id'=> 1,'level' => 2,'departament_id' => 2],
            ['code' => 'IC2323',  'name' => 'ALGORITMOS I','avr' => 'Alg.I', 'u_c' => 0,'h_s' => 4,'pensum_id'=> 1,'level' => 2,'departament_id' => 3],
            ['code' => 'IH2124',  'name' => 'PROBLEMATICA CIENTIFICA TECNOL','avr' => 'P.C.T.', 'u_c' => 0,'h_s' => 2,'pensum_id'=> 1,'level' => 2,'departament_id' => 1],
            ['code' => 'IH2125',  'name' => 'INGLES II','avr' => 'Ing.II', 'u_c' => 0,'h_s' => 2,'pensum_id'=> 1,'level' => 2,'departament_id' => 1],
            ['code' => 'IM2421',  'name' => 'MATEMATICA II','avr' => 'Mat.II', 'u_c' => 0,'h_s' => 6,'pensum_id'=> 1,'level' => 2,'departament_id' => 2],
            ['code' => 'IME320',  'name' => 'ELECTIVA I (CONDUCTA HUMANA)','avr' => 'Elec.I', 'u_c' => 0,'h_s' => 2,'pensum_id'=> 1,'level' => 2,'departament_id' => 1],
            ['code' => 'IB3322',  'name' => 'FISICA II','avr' => 'Fis.II', 'u_c' => 0,'h_s' => 5,'pensum_id'=> 1,'level' => 3,'departament_id' => 2],
            ['code' => 'IC3244',  'name' => 'PROGRAMACION I','avr' => 'Prog.I', 'u_c' => 0,'h_s' => 6,'pensum_id'=> 1,'level' => 3,'departament_id' => 3],
            ['code' => 'IC3323',  'name' => 'ALGORITMOS II','avr' => 'Alg.II', 'u_c' => 0,'h_s' => 4,'pensum_id'=> 1,'level' => 3,'departament_id' => 3],
            ['code' => 'IH3125',  'name' => 'METODOLOGIA Y TECNICAS DE INVE','avr' => 'M.T.I.', 'u_c' => 0,'h_s' => 2,'pensum_id'=> 1,'level' => 3,'departament_id' => 1],
            ['code' => 'IM3421',  'name' => 'MATEMATICA III','avr' => 'Mat.III', 'u_c' => 0,'h_s' => 6,'pensum_id'=> 1,'level' => 3,'departament_id' => 2],
            ['code' => 'IME520',  'name' => 'ELECTIVA II (LEGISLACION INFOR','avr' => 'Elec.II', 'u_c' => 0,'h_s' => 2,'pensum_id'=> 1,'level' => 3,'departament_id' => 1],
            ['code' => 'IC4244',  'name' => 'PROGRAMACION II','avr' => 'Prog.II', 'u_c' => 0,'h_s' => 6,'pensum_id'=> 1,'level' => 4,'departament_id' => 3],
            ['code' => 'IM4323',  'name' => 'ESTRUCTURAS DISCRETAS I','avr' => 'Est.Dis.I', 'u_c' => 0,'h_s' => 5,'pensum_id'=> 1,'level' => 4,'departament_id' => 2],
            ['code' => 'IM4421',  'name' => 'MATEMATICA IV','avr' => 'Mat.IV', 'u_c' => 0,'h_s' => 6,'pensum_id'=> 1,'level' => 4,'departament_id' => 2],
            ['code' => 'IM5421',  'name' => 'PROBABILIDADES Y ESTADISTICA','avr' => 'Prob.Est.', 'u_c' => 0,'h_s' => 4,'pensum_id'=> 1,'level' => 4,'departament_id' => 2],
            ['code' => 'IME720',  'name' => 'ELECTIVA III (MANTENIMIENTO DE','avr' => 'Elec.III', 'u_c' => 0,'h_s' => 2,'pensum_id'=> 1,'level' => 4,'departament_id' => 3],
            ['code' => 'IS4225',  'name' => 'BASE DE DATOS','avr' => 'B.D.D.', 'u_c' => 0,'h_s' => 4,'pensum_id'=> 1,'level' => 4,'departament_id' => 4],
            ['code' => 'IC5244',  'name' => 'PROGRAMACION III','avr' => 'Prog.III', 'u_c' => 0,'h_s' => 6,'pensum_id'=> 1,'level' => 5,'departament_id' => 3],
            ['code' => 'IC5422',  'name' => 'ORGANIZACION DEL COMPUTADOR','avr' => 'Org.Comp.', 'u_c' => 0,'h_s' => 6,'pensum_id'=> 1,'level' => 5,'departament_id' => 3],
            ['code' => 'IM5221',  'name' => 'ALGEBRA BOOLEANA','avr' => 'Alg.Boo.', 'u_c' => 0,'h_s' => 4,'pensum_id'=> 1,'level' => 5,'departament_id' => 2],
            ['code' => 'IM5323',  'name' => 'ESTRUCTURAS DISCRETAS II','avr' => 'Est.Dis.II', 'u_c' => 0,'h_s' => 5,'pensum_id'=> 1,'level' => 5,'departament_id' => 2],
            ['code' => 'IMEIV',   'name' => 'ELECTIVA IV (TELEINFORMATICA)','avr' => 'Elec.IV', 'u_c' => 0,'h_s' => 2,'pensum_id'=> 1,'level' => 5,'departament_id' => 3],
            ['code' => 'IS5205',  'name' => 'TEORIA DE SISTEMAS','avr' => 'Teo.Sis.', 'u_c' => 0,'h_s' => 2,'pensum_id'=> 1,'level' => 5,'departament_id' => 4],
            ['code' => 'IC6322',  'name' => 'ARQUITECTURA DEL COMPUTADOR','avr' => 'Arq.Comp.', 'u_c' => 0,'h_s' => 5,'pensum_id'=> 1,'level' => 6,'departament_id' => 3],
            ['code' => 'ID6124',  'name' => 'INGENIERIA ECONOMICA','avr' => 'Ing.Eco.', 'u_c' => 0,'h_s' => 2,'pensum_id'=> 1,'level' => 6,'departament_id' => 4],
            ['code' => 'ID6241',  'name' => 'INVESTIGACION DE OPERACIONES','avr' => 'Inv.Ope.', 'u_c' => 0,'h_s' => 6,'pensum_id'=> 1,'level' => 6,'departament_id' => 2],
            ['code' => 'IM6243',  'name' => 'METODOS NUMERICOS','avr' => 'Met.Num.', 'u_c' => 0,'h_s' => 6,'pensum_id'=> 1,'level' => 6,'departament_id' => 2],
            ['code' => 'IMEV',    'name' => 'ELECTIVA V','avr' => 'Elec.V', 'u_c' => 0,'h_s' => 2,'pensum_id'=> 1,'level' => 6,'departament_id' => 3],
            ['code' => 'IS6425',  'name' => 'SISTEMAS DE INFORMACION I','avr' => 'Sis.Inf.I', 'u_c' => 0,'h_s' => 2,'pensum_id'=> 1,'level' => 6,'departament_id' => 4],
            ['code' => 'IC7322',  'name' => 'SISTEMAS OPERATIVOS','avr' => 'Sis.Ope.', 'u_c' => 0,'h_s' => 5,'pensum_id'=> 1,'level' => 7,'departament_id' => 3],
            ['code' => 'ID7322',  'name' => 'CONTROL DE PROYECTOS','avr' => 'Cont.Proy.', 'u_c' => 0,'h_s' => 5,'pensum_id'=> 1,'level' => 7,'departament_id' => 4],
            ['code' => 'ID7323',  'name' => 'ORGANIZACION Y GESTION EMPRESA','avr' => 'O.G.E.', 'u_c' => 0,'h_s' => 5,'pensum_id'=> 1,'level' => 7,'departament_id' => 4],
            ['code' => 'IS7244',  'name' => 'TRADUCTORES E INTERPRETES','avr' => 'Trad.Int.', 'u_c' => 0,'h_s' => 6,'pensum_id'=> 1,'level' => 7,'departament_id' => 3],
            ['code' => 'IS7324',  'name' => 'SISTEMAS DE INFORMACION II','avr' => 'Sis.Inf.II', 'u_c' => 0,'h_s' => 6,'pensum_id'=> 1,'level' => 7,'departament_id' => 4],
            ['code' => 'EA',      'name' => 'ELECTIVA DE AREA I','avr' => 'Elec.Are.I', 'u_c' => 0,'h_s' => 6,'pensum_id'=> 1,'level' => 8,'departament_id' => 4],
            ['code' => 'ID8082',  'name' => 'PASANTIA','avr' => 'Pas.', 'u_c' => 0,'h_s' => 0,'pensum_id'=> 1,'level' => 8,'departament_id' => 4],
            ['code' => 'IS8243',  'name' => 'LENGUAJE DE PROGRAMACION','avr' => 'Leng.Prog.', 'u_c' => 0,'h_s' => 6,'pensum_id'=> 1,'level' => 8,'departament_id' => 3],
            ['code' => 'IS8424',  'name' => 'SISTEMAS DE INFORMACION III','avr' => 'Sis.Inf.III', 'u_c' => 0,'h_s' => 6,'pensum_id'=> 1,'level' => 8,'departament_id' => 4],
            ['code' => 'IT8241',  'name' => 'REDES','avr' => 'Red.', 'u_c' => 0,'h_s' => 6,'pensum_id'=> 1,'level' => 8,'departament_id' => 4],
            ['code' => 'EA9244',  'name' => 'ELECTIVA DE AREA II','avr' => 'Elec.Are.II', 'u_c' => 0,'h_s' => 6,'pensum_id'=> 1,'level' => 9,'departament_id' => 4],
            ['code' => 'EL9325',  'name' => 'ELECTIVA LIBRE I','avr' => 'Elec.Lib.I', 'u_c' => 0,'h_s' => 5,'pensum_id'=> 1,'level' => 9,'departament_id' => 4],
            ['code' => 'IH9202',  'name' => 'ETICA PROFESIONAL','avr' => 'Eti.Prof.', 'u_c' => 0,'h_s' => 2,'pensum_id'=> 1,'level' => 9,'departament_id' => 4],
            ['code' => 'IT9241',  'name' => 'SISTEMAS DISTRIBUIDOS','avr' => 'Sis.Dist.', 'u_c' => 0,'h_s' => 6,'pensum_id'=> 1,'level' => 9,'departament_id' => 4],
            ['code' => 'PG9083',  'name' => 'PROYECTO DE GRADO I','avr' => 'P.G.I', 'u_c' => 0,'h_s' => 2,'pensum_id'=> 1,'level' => 9,'departament_id' => 4],
            ['code' => 'EA0244',  'name' => 'ELECTIVA DE AREA III','avr' => 'Elec.Are.III', 'u_c' => 0,'h_s' => 6,'pensum_id'=> 1,'level' => 10,'departament_id' => 4],
            ['code' => 'EL',      'name' => 'ELECTIVA LIBRE II','avr' => 'Elec.Lib.II', 'u_c' => 0,'h_s' => 5,'pensum_id'=> 1,'level' => 10,'departament_id' => 4],
            ['code' => 'ID0221',  'name' => 'GERENCIA DE PROYECTO','avr' => 'Ger.Proy.', 'u_c' => 0,'h_s' => 4,'pensum_id'=> 1,'level' => 10,'departament_id' => 4],
            ['code' => 'IS0222',  'name' => 'INFORMATICA EDUCATIVA','avr' => 'Inf.Edu.', 'u_c' => 0,'h_s' => 4,'pensum_id'=> 1,'level' => 10,'departament_id' => 4],
            ['code' => 'PG0083',  'name' => 'PROYECTO DE GRADO II','avr' => 'P.G.II', 'u_c' => 0,'h_s' => 2,'pensum_id'=> 1,'level' => 10,'departament_id' => 4],
            ['code' => 'EST122',  'name' => 'ESTADISTICA','avr' => 'Est.', 'u_c' => 0,'h_s' => 0,'pensum_id'=> 2,'level' => 1,'departament_id' => 0],
            ['code' => 'MOC143',  'name' => 'MORFOSINTAXIS DEL CASTELLANO','avr' => 'Morf.Cast.', 'u_c' => 0,'h_s' => 0,'pensum_id'=> 2,'level' => 1,'departament_id' => 0],
            ['code' => 'TREI343', 'name' => 'TALLER DE REDACCIÃ’N Y ESTILO I','avr' => 'Red.Est.I', 'u_c' => 0,'h_s' => 0,'pensum_id'=> 2,'level' => 1,'departament_id' => 0],
            ['code' => 'TREII343','name' => 'TALLER DE REDACCION Y ESTILO II','avr' => 'Red.Est.II', 'u_c' => 0,'h_s' => 0,'pensum_id'=> 2,'level' => 1,'departament_id' => 0],
            ['code' => 'IH1125',  'name' => 'INGLES I','avr' => 'ING. 1', 'u_c' => 0,'h_s' => 2,'pensum_id'=> 1,'level' => 1,'departament_id' => 1],
            ['code' => 'IC1222',  'name' => 'Fundamentos de la Informática','avr' => 'Fun.Inf.', 'u_c' => 3,'h_s' => 4,'pensum_id'=> 2,'level' => 1,'departament_id' => 3],
            ['code' => 'IM1223',  'name' => 'Logica Matematica','avr' => 'Log.Mat.', 'u_c' => 3,'h_s' => 4,'pensum_id'=> 2,'level' => 1,'departament_id' => 2],
            ['code' => 'IM1421',  'name' => 'Matematica I','avr' => 'Mat.I', 'u_c' => 5,'h_s' => 6,'pensum_id'=> 2,'level' => 1,'departament_id' => 2],
            ['code' => 'IB2322',  'name' => 'Fisica I','avr' => 'Fis.I', 'u_c' => 4,'h_s' => 5,'pensum_id'=> 2,'level' => 2,'departament_id' => 2],
            ['code' => 'IC2323',  'name' => 'Algoritmos I','avr' => 'Alg.I', 'u_c' => 3,'h_s' => 4,'pensum_id'=> 2,'level' => 2,'departament_id' => 3],
            ['code' => 'IH2124',  'name' => 'Problematica Cientifica Tecnológica','avr' => 'PCT', 'u_c' => 2,'h_s' => 2,'pensum_id'=> 2,'level' => 2,'departament_id' => 1],
            ['code' => 'IH2125',  'name' => 'Ingles II','avr' => 'Ing.II', 'u_c' => 2,'h_s' => 2,'pensum_id'=> 2,'level' => 2,'departament_id' => 1],
            ['code' => 'IM2421',  'name' => 'Matematica II','avr' => 'Mat.II', 'u_c' => 5,'h_s' => 6,'pensum_id'=> 2,'level' => 2,'departament_id' => 2],
            ['code' => 'IME320',  'name' => 'Electiva I (Conducta Humana)','avr' => 'Elec.I', 'u_c' => 2,'h_s' => 2,'pensum_id'=> 2,'level' => 2,'departament_id' => 1],
            ['code' => 'IB3322',  'name' => 'Fisica II','avr' => 'Fis.II', 'u_c' => 4,'h_s' => 5,'pensum_id'=> 2,'level' => 3,'departament_id' => 2],
            ['code' => 'IC3244',  'name' => 'Programación I','avr' => 'Prog.I', 'u_c' => 4,'h_s' => 6,'pensum_id'=> 2,'level' => 3,'departament_id' => 3],
            ['code' => 'IC3323',  'name' => 'Algoritmos II','avr' => 'Alg.II', 'u_c' => 3,'h_s' => 4,'pensum_id'=> 2,'level' => 3,'departament_id' => 3],
            ['code' => 'IH3125',  'name' => 'Metodología y Tecnicas de Investigación','avr' => 'MTI', 'u_c' => 2,'h_s' => 2,'pensum_id'=> 2,'level' => 3,'departament_id' => 1],
            ['code' => 'IM3421',  'name' => 'Matematica III','avr' => 'Mat.III', 'u_c' => 5,'h_s' => 6,'pensum_id'=> 2,'level' => 3,'departament_id' => 2],
            ['code' => 'IME520',  'name' => 'Electiva II (LegislaciÃ³n InformÃ¡tica)','avr' => 'Elec.II', 'u_c' => 2,'h_s' => 2,'pensum_id'=> 2,'level' => 3,'departament_id' => 1],
            ['code' => 'IC4244',  'name' => 'Programación II','avr' => 'Prog.II', 'u_c' => 4,'h_s' => 6,'pensum_id'=> 2,'level' => 4,'departament_id' => 3],
            ['code' => 'IM4323',  'name' => 'Estructuras Discretas I','avr' => 'Est.Dis.I', 'u_c' => 4,'h_s' => 5,'pensum_id'=> 2,'level' => 4,'departament_id' => 2],
            ['code' => 'IM4421',  'name' => 'Matematica IV','avr' => 'Mat.IV', 'u_c' => 5,'h_s' => 6,'pensum_id'=> 2,'level' => 4,'departament_id' => 2],
            ['code' => 'IM5421',  'name' => 'Probabilidades y Estadistica','avr' => 'Prob.Est.', 'u_c' => 3,'h_s' => 4,'pensum_id'=> 2,'level' => 4,'departament_id' => 2],
            ['code' => 'IME720',  'name' => 'Electiva III (Mantenimiento del Comp.)','avr' => 'Elec.III', 'u_c' => 2,'h_s' => 2,'pensum_id'=> 2,'level' => 4,'departament_id' => 3],
            ['code' => 'IS4225',  'name' => 'Base de Datos','avr' => 'B.D.D.', 'u_c' => 3,'h_s' => 4,'pensum_id'=> 2,'level' => 4,'departament_id' => 4],
            ['code' => 'IC5244',  'name' => 'Programación III','avr' => 'Prog.III', 'u_c' => 4,'h_s' => 6,'pensum_id'=> 2,'level' => 5,'departament_id' => 3],
            ['code' => 'IC5422',  'name' => 'Organización de Computador','avr' => 'Org.Comp.', 'u_c' => 5,'h_s' => 6,'pensum_id'=> 2,'level' => 5,'departament_id' => 3],
            ['code' => 'IM5221',  'name' => 'Algebra Booleana','avr' => 'Alg.Boo.', 'u_c' => 3,'h_s' => 4,'pensum_id'=> 2,'level' => 5,'departament_id' => 2],
            ['code' => 'IM5323',  'name' => 'Estructuras Discretas II','avr' => 'Est.Dis.II', 'u_c' => 4,'h_s' => 5,'pensum_id'=> 2,'level' => 5,'departament_id' => 2],
            ['code' => 'IMEIV',   'name' => 'Electiva IV (Teleinformática)','avr' => 'Elec.IV', 'u_c' => 2,'h_s' => 2,'pensum_id'=> 2,'level' => 5,'departament_id' => 3],
            ['code' => 'IS5205',  'name' => 'Teoria de Sistemas','avr' => 'Teo.Sis.', 'u_c' => 2,'h_s' => 2,'pensum_id'=> 2,'level' => 5,'departament_id' => 4],
            ['code' => 'IC6322',  'name' => 'Arquitectura del Computador','avr' => 'Arq.Comp.', 'u_c' => 4,'h_s' => 5,'pensum_id'=> 2,'level' => 6,'departament_id' => 3],
            ['code' => 'ID6124',  'name' => 'Ingeniería Económica','avr' => 'Ing.Eco.', 'u_c' => 2,'h_s' => 2,'pensum_id'=> 2,'level' => 6,'departament_id' => 4],
            ['code' => 'ID6241',  'name' => 'Investigación de Operaciones','avr' => 'Inv.Ope.', 'u_c' => 4,'h_s' => 6,'pensum_id'=> 2,'level' => 6,'departament_id' => 2],
            ['code' => 'IM6243',  'name' => 'Metodos Numericos','avr' => 'Met.Num.', 'u_c' => 4,'h_s' => 6,'pensum_id'=> 2,'level' => 6,'departament_id' => 2],
            ['code' => 'IMEV',    'name' => 'Electiva V','avr' => 'Elec.V', 'u_c' => 2,'h_s' => 2,'pensum_id'=> 2,'level' => 6,'departament_id' => 3],
            ['code' => 'IS6425',  'name' => 'Sistemas de Información I','avr' => 'Sis.Inf.I', 'u_c' => 5,'h_s' => 6,'pensum_id'=> 2,'level' => 6,'departament_id' => 4],
            ['code' => 'IC7322',  'name' => 'Sistemas Operativos','avr' => 'Sis.Ope.', 'u_c' => 4,'h_s' => 5,'pensum_id'=> 2,'level' => 7,'departament_id' => 3],
            ['code' => 'ID7322',  'name' => 'Control de Proyectos','avr' => 'Cont.Proy.', 'u_c' => 4,'h_s' => 5,'pensum_id'=> 2,'level' => 7,'departament_id' => 4],
            ['code' => 'ID7323',  'name' => 'Organización y Gestión Empresarial','avr' => 'O.G.E.', 'u_c' => 4,'h_s' => 5,'pensum_id'=> 2,'level' => 7,'departament_id' => 4],
            ['code' => 'IS7244',  'name' => 'Traductores e Interpretes','avr' => 'Trad.Int.', 'u_c' => 4,'h_s' => 6,'pensum_id'=> 2,'level' => 7,'departament_id' => 3],
            ['code' => 'IS7324',  'name' => 'Sistemas de Información II','avr' => 'Sis.Inf.II', 'u_c' => 5,'h_s' => 6,'pensum_id'=> 2,'level' => 7,'departament_id' => 4],
            ['code' => 'EA',      'name' => 'Electiva de Area I','avr' => 'Elec.Are.I', 'u_c' => 4,'h_s' => 6,'pensum_id'=> 2,'level' => 8,'departament_id' => 4],
            ['code' => 'ID8082',  'name' => 'Pasantia','avr' => 'Pas.', 'u_c' => 4,'h_s' => 2,'pensum_id'=> 2,'level' => 8,'departament_id' => 4],
            ['code' => 'IS8243',  'name' => 'Lenguaje de Programación','avr' => 'Leng.Prog.', 'u_c' => 4,'h_s' => 6,'pensum_id'=> 2,'level' => 8,'departament_id' => 3],
            ['code' => 'IS8424',  'name' => 'Sistemas de Información III','avr' => 'Sis.Inf.III', 'u_c' => 5,'h_s' => 6,'pensum_id'=> 2,'level' => 8,'departament_id' => 4],
            ['code' => 'IT8241',  'name' => 'Redes','avr' => 'Red.', 'u_c' => 4,'h_s' => 6,'pensum_id'=> 2,'level' => 8,'departament_id' => 4],
            ['code' => 'EA9244',  'name' => 'Electiva de Area II','avr' => 'Elec.Are.II', 'u_c' => 4,'h_s' => 6,'pensum_id'=> 2,'level' => 9,'departament_id' => 4],
            ['code' => 'EL9325',  'name' => 'Electiva Libre I','avr' => 'Elec.Lib.I', 'u_c' => 4,'h_s' => 5,'pensum_id'=> 2,'level' => 9,'departament_id' => 4],
            ['code' => 'IH9202',  'name' => 'Etica Profesional','avr' => 'Eti.Prof.', 'u_c' => 2,'h_s' => 2,'pensum_id'=> 2,'level' => 9,'departament_id' => 4],
            ['code' => 'IT9241',  'name' => 'Sistemas Distribuidos','avr' => 'Sis.Dist.', 'u_c' => 4,'h_s' => 6,'pensum_id'=> 2,'level' => 9,'departament_id' => 4],
            ['code' => 'PG9083',  'name' => 'Proyecto de Grado I','avr' => 'P.G.I', 'u_c' => 4,'h_s' => 3,'pensum_id'=> 2,'level' => 9,'departament_id' => 4],
            ['code' => 'EA0244',  'name' => 'Electiva de Area III','avr' => 'Elec.Are.III', 'u_c' => 4,'h_s' => 6,'pensum_id'=> 2,'level' => 10,'departament_id' => 4],
            ['code' => 'EL',      'name' => 'Electiva Libre II','avr' => 'Elec.Lib.II', 'u_c' => 3,'h_s' => 5,'pensum_id'=> 2,'level' => 10,'departament_id' => 4],
            ['code' => 'ID0221',  'name' => 'Gerencia de Proyecto','avr' => 'Ger.Proy.', 'u_c' => 3,'h_s' => 4,'pensum_id'=> 2,'level' => 10,'departament_id' => 4],
            ['code' => 'IS0222',  'name' => 'Informática Educativa','avr' => 'Inf.Edu.', 'u_c' => 3,'h_s' => 4,'pensum_id'=> 2,'level' => 10,'departament_id' => 4],
            ['code' => 'PG0083',  'name' => 'Proyecto de Grado II','avr' => 'P.G.II', 'u_c' => 4,'h_s' => 3,'pensum_id'=> 2,'level' => 10,'departament_id' => 4],
            ['code' => 'IH1124',  'name' => 'Lenguaje y Comunicación','avr' => 'LyC', 'u_c' => 2,'h_s' => 2,'pensum_id'=> 2,'level' => 1,'departament_id' => 1],
            ['code' => 'IH1125',  'name' => 'Ingles I','avr' => 'Ing.I', 'u_c' => 2,'h_s' => 2,'pensum_id'=> 2,'level' => 1,'departament_id' => 1],
            ['code' => 'FC0001',  'name' => 'Formación Constitucional','avr' => 'For.Cons.', 'u_c' => 2,'h_s' => 2,'pensum_id'=> 2,'level' => 1,'departament_id' => 1],
            ['code' => 'AC0001',  'name' => 'Arte y Cultura','avr' => 'AyC', 'u_c' => 2,'h_s' => 2,'pensum_id'=> 2,'level' => 2,'departament_id' => 1],
            ['code' => 'DP0001',  'name' => 'Deporte','avr' => 'Dpte.', 'u_c' => 0,'h_s' =>  2,'pensum_id' => 2,'level' => 1,'departament_id' => 1],
        ];

        Subject::insert($subjects);
    }
}
