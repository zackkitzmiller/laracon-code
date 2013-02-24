from time import sleep

import beanstalkc
import MySQLdb
import phpserialize


beanstalk = beanstalkc.Connection(host='localhost')

# watch the python worker specific tube
beanstalk.watch('python')

db = MySQLdb.connect(
    host='localhost',
    user='root',
    passwd='root',
    db='laracon',
    port=8999,
    unix_socket='/Applications/MAMP/tmp/mysql/mysql.sock')

cur = db.cursor()

while True:
    job = beanstalk.reserve()
    data = phpserialize.loads(job.body)['data']
    user_id = data['user_id']


    print "updating {0}".format(user_id)

    sleep(8)

    cur.execute("""
       UPDATE users
       SET updated=%s
       WHERE id=%s
    """, (1, user_id,))

    db.commit()

    job.delete()