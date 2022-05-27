
# CodeGuard Scan Report    ![img](https://img.shields.io/badge/SCA%20-%20NO%20vuln.%20found-green.svg)  ![img](https://img.shields.io/badge/SAST%20-%203%20HIGH%20vuln.%20found-red.svg)
# Project: Sanofi-Shared-GitHub-Apps/cyber-private-test-alac
__Source:__ zip   --   __Branch:__ main

__Scan Execution date:__ 2022-05-02T09:27:47.434924Z

__Scan Id:__ d1eb674f-256d-4e75-9e1a-f3285ac4a650

__Scan Status:__ Completed

## Executive summary
You'll find below a list of vulnerabilities identified by our service on both Static Application Security Testing and Software Composition Analysis dimensions:
  - SCA analyzes open source and 3rd party libraries (vulnerabilities and legal risks)
  - SAST focuses on custom code (built by the development team)

  
 <table align="center" >
  <tr>
    <th>SCA</th>
    <th colspan="3">SAST</th>
  </tr>
  <tr>
    <th>:red_circle:<br/>HIGH</th>
    <th>:red_circle:<br/>HIGH</th>
    <th>:orange_circle:<br/>MEDIUM</th>
    <th>:green_circle:<br/>LOW</th>
  </tr>
  <tr align="center">
    <td>0</td>
    <td>3</td>
    <td>2</td>
    <td>2</td>
  </tr>
</table>


## SCA Alerts 

### List of Packages
NO Packages with HIGH CVEs


### List of Container Packages
NO Packages with HIGH CVEs


## SAST Detailed Alerts

 <details><summary> (1) <b>HIGH - Command_Injection </b> </summary> 

#### CWE: [77](https://cwe.mitre.org/data/definitions/77.html)



(RECURRENT) Description:The application's $PageLoad method calls an OS (shell) command with exec, at line 14 of /sample.php, using an untrusted string with the command to execute.  

This could allow an attacker to inject an arbitrary command, and enable a Command Injection attack.

The attacker may be able to inject the executed command via user input, _COOKIE, which is retrieved by the application in the $PageLoad method, at line 13 of /sample.php.

https://github.com/Sanofi-Shared-GitHub-Apps/cyber-private-test-alac/blob/ad52ab02d2c3a6322ee62e2d6b28181ecabc0f08/sample.php#L12-L16
  > origin: [/sample.php](https://github.com/Sanofi-Shared-GitHub-Apps/cyber-private-test-alac/blob/main/sample.php#L14) - `exec` line 14 </details>

 <details><summary> (1) <b>HIGH - Reflected_XSS_All_Clients </b> </summary> 

#### CWE: [79](https://cwe.mitre.org/data/definitions/79.html)



(RECURRENT) Description:The application's $PageLoad embeds untrusted data in the generated output with echo, at line 5 of /sample.php. This untrusted data is embedded straight into the output without proper sanitization or encoding, enabling an attacker to inject malicious code into the output.

The attacker would be able to alter the returned web page by simply providing modified data in the user input _GET, which is read by the $PageLoad method at line 4 of /sample.php. This input then flows through the code straight to the output web page, without sanitization. 

This can enable a Reflected Cross-Site Scripting (XSS) attack.

https://github.com/Sanofi-Shared-GitHub-Apps/cyber-private-test-alac/blob/ad52ab02d2c3a6322ee62e2d6b28181ecabc0f08/sample.php#L3-L7
  > origin: [/sample.php](https://github.com/Sanofi-Shared-GitHub-Apps/cyber-private-test-alac/blob/main/sample.php#L5) - `echo` line 5 </details>

 <details><summary> (1) <b>HIGH - SQL_Injection </b> </summary> 

#### CWE: [89](https://cwe.mitre.org/data/definitions/89.html)



(RECURRENT) Description:The application's $PageLoad method executes an SQL query with mysql_query, at line 10 of /sample.php. The application constructs this SQL query by embedding an untrusted string into the query without proper sanitization. The concatenated string is submitted to the database, where it is parsed and executed accordingly.

An attacker would be able to inject arbitrary syntax and data into the SQL query, by crafting a malicious payload and providing it via the input _POST; this input is then read by the $PageLoad method at line 9 of /sample.php. This input then flows through the code, into a query and to the database server - without sanitization.

This may enable an SQL Injection attack.

https://github.com/Sanofi-Shared-GitHub-Apps/cyber-private-test-alac/blob/ad52ab02d2c3a6322ee62e2d6b28181ecabc0f08/sample.php#L8-L12
  > origin: [/sample.php](https://github.com/Sanofi-Shared-GitHub-Apps/cyber-private-test-alac/blob/main/sample.php#L10) - `mysql_query` line 10 </details>

 <details><summary> (1) <b>MEDIUM - Missing_HSTS_Header </b> </summary> 

#### CWE: [346](https://cwe.mitre.org/data/definitions/346.html)



(RECURRENT) Description:The web-application does not define an HSTS header, leaving it vulnerable to attack.

https://github.com/Sanofi-Shared-GitHub-Apps/cyber-private-test-alac/blob/ad52ab02d2c3a6322ee62e2d6b28181ecabc0f08/sample.php#L1-L3
  > origin: [/sample.php](https://github.com/Sanofi-Shared-GitHub-Apps/cyber-private-test-alac/blob/main/sample.php#L1) - `$NS_sample_79a4f4e1` line 1 </details>

 <details><summary> (1) <b>MEDIUM - Parameter_Tampering </b> </summary> 

#### CWE: [472](https://cwe.mitre.org/data/definitions/472.html)



(RECURRENT) Description:Method $PageLoad at line 9 of /sample.php gets user input from element _POST. This input is later concatenated by the application directly into a string variable containing SQL commands, without being validated. This string is then used in method $PageLoad to query the database mysql_query, at line 10 of /sample.php, without any additional filtering by the database. This could allow the user to tamper with the filter parameter.https://github.com/Sanofi-Shared-GitHub-Apps/cyber-private-test-alac/blob/ad52ab02d2c3a6322ee62e2d6b28181ecabc0f08/sample.php#L8-L12
  > origin: [/sample.php](https://github.com/Sanofi-Shared-GitHub-Apps/cyber-private-test-alac/blob/main/sample.php#L10) - `mysql_query` line 10 </details>

