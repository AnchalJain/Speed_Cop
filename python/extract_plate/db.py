import MySQLdb as db

# HOST = "root@192.168.137.12"
HOST = "192.168.137.12"
PORT = 3306
USER = "anchal"
PASSWORD = "forceofnature"
DB = "analysis"

try:
    connection = db.Connection(host=HOST, port=PORT,
                               user=USER, passwd=PASSWORD, db=DB)

    dbhandler = connection.cursor()
    dbhandler.execute("SELECT * from analysis")
    result = dbhandler.fetchall()
    for item in result:
        print (item)

except Exception as e:
    print (e)

# finally:

#     connection.close()
