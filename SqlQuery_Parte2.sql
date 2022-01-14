
-- GROUP BY --

-- 1. Contare quanti iscritti ci sono stati ogni anno
SELECT YEAR(`enrolment_date`) AS `enrolment_year`, COUNT(`id`) AS `enrolments_for_year`
FROM `students` 
GROUP BY `enrolment_year`;

-- 2. Contare gli insegnanti che hanno l'ufficio nello stesso edificio
SELECT COUNT(`id`) AS `teachers_in_same_building`, `office_address`
FROM `teachers` 
GROUP BY `office_address`;

-- 3. Calcolare la media dei voti di ogni appello d'esame
SELECT AVG(`vote`) AS `votes_average`, `exam_id`
FROM `exam_student` 
GROUP BY `exam_id`;

-- 4. Contare quanti corsi di laurea ci sono per ogni dipartimento
SELECT COUNT(`id`) AS `degrees_for_department`, `department_id`
FROM `degrees` 
GROUP BY `department_id`;



