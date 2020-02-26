import sys
import smtplib, ssl

mail = sys.argv[1]
code = sys.argv[2]
# print(mail)
# Sends Mail
port = 465  # For SSL
smtp_server = "smtp.gmail.com"
sender_email = "bvmschool456@gmail.com"  # Sender's mail address
receiver_email = mail  # Receiver's mail address
password = "School@123"
message = """\
Subject: Password reset

Hii There.. \n
Here is the One Time Password to reset your password \n
Code = """+code

context = ssl.create_default_context()
with smtplib.SMTP_SSL(smtp_server, port, context=context) as server:
    server.login(sender_email, password)
    server.sendmail(sender_email, receiver_email, message)