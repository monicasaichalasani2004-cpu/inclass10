IN-CLASS 10 — COOKIES & SESSIONS

These are original functional PHP lab files modeled on the assignment description, not copies of your instructor's starter files.

1. Upload all five files together into your CODD web directory, e.g. ~/Web/inclass10/.
2. Visit https://codd.cs.gsu.edu/~mchalasani1/Web/inclass10/session-cookies-1.php
3. Reload Lab 1 twice and inspect LAST_VISIT, VISIT_NUMBER, FIRST_VISIT and random_number cookies in browser DevTools.
4. Visit Lab 3 without logging in: it should deny access.
5. Enter an incorrect password in Lab 1: login should fail.
6. Enter the correct lab password 'Test': login succeeds; Lab 3 grants access.
7. Delete PHPSESSID from DevTools and revisit Lab 3: access should be denied.
8. Write your OWN observations for steps 3-14, including the FIRST_VISIT explanation and Step 11 PHP code.
9. Write all 12 questions and answers in Chalasani_Monica_CriticalThinking06.docx (question text is not included in the provided pasted assignment).
10. If your instructor assigned graduate CT-03/CT-04, prepare your OWN analysis and memo plus required peer review/reflection. The assignment expressly prohibits AI drafting or outlining that memo.
11. Submit documents and tested CODD URL through iCollege. Uploading to CODD alone does not submit the assignment.

NOTE: To observe the Step 7 'headers already sent' warning, deliberately moving setcookie after HTML should be tested on your PHP server, then undone; output buffering can affect warnings.
