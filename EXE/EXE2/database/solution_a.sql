1. SELECT * FROM users ORDER BY user_name ASC;

2. SELECT * FROM users ORDER BY user_name ASC LIMIT 7;

3. SELECT * FROM users WHERE user_name LIKE '%a%' ORDER BY user_name ASC;

4. SELECT * FROM users WHERE user_name LIKE 'm%';

5. SELECT * FROM users WHERE user_name LIKE '%i';

6. SELECT * FROM users WHERE user_email LIKE '%gmail%';

7. SELECT * FROM users WHERE user_email LIKE '%gmail%' AND user_name LIKE 'm%';

8. SELECT * FROM users WHERE user_email LIKE '%gmail%' AND user_name LIKE '%i%' AND LENGTH(user_name) > 5;

9. SELECT * FROM users WHERE user_name LIKE '%a%' 
                       AND LENGTH(user_name) >= 5 
					   AND LENGTH(user_name) <= 9 
					   AND user_email LIKE "%@gmail.com" 
					   AND LENGTH(user_email) - LENGTH(REPLACE(user_email, 'i', '')) >= 2;
					   
10. SELECT * FROM users WHERE (user_name LIKE '%a%' AND LENGTH(user_name) >= 5 AND LENGTH(user_name) <=9)
OR (user_name LIKE '%i%' AND LENGTH(user_name) <9)
OR (user_email LIKE '%@gmail.com' AND LENGTH(user_email) - LENGTH(REPLACE(user_email, 'i', '')) >=2)