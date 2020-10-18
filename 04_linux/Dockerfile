# BaseImage
FROM centos:7

# package update & install
# Dockerは文を実行するたびにイメージのレイヤーを作成されてしまうので && でワンライナーにする \ で次行に続く
RUN yum -y update && yum -y --setopt=tsflags='' -qq install glibc-common \
  man nano less which man-pages sudo

# setting time & langage & timezone
# RUN locale-gen ja_JP.UTF-8
ENV LANG=ja_JP.UTF-8 LANGUAGE=ja_JP:ja TZ=Japan LC_CTYPE=ja_JP.UTF-8
RUN localedef -f UTF-8 -i ja_JP ja_JP.utf8
ENV LC_ALL ja_JP.UTF-8

# camp ver.
RUN echo 'export PS1="\n\[\033[35m\]\u@\h\[\033[00m\]:\[\033[36m\]\w\[\033[00m\]\n[app] \$ "' >> ~/.bashrc \
  && echo ':set encoding=utf-8' > ~/.vimrc

# setting docker
ARG USER

RUN useradd $USER \
  && echo 'root:root_pass' |chpasswd \
  && echo "$USER:camp_pass" |chpasswd \
  && echo "$USER    ALL=(ALL)       ALL" >> /etc/sudoers

USER $USER
RUN mkdir -p ~/linux
WORKDIR /home/$USER/linux

RUN echo 'export PS1="\n\[\033[35m\]\u@\h\[\033[00m\]:\[\033[36m\]\w\[\033[00m\]\n[app] \$ "' >> ~/.bashrc \
  && echo "export LANG=ja_JP.UTF-8" >> ~/.bashrc \
