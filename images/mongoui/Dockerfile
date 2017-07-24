FROM ubuntu:14.04
MAINTAINER Ahmed Kamal <email.ahmedkamal@googlemail.com>


RUN apt-get update && \
    apt-get install nodejs git -qqy  && \
    git clone https://github.com/azat-co/mongoui.git && \
    apt-get clean all

WORKDIR /mongoui

ADD boot.sh /mongoui/

EXPOSE 3000

CMD sh boot.sh