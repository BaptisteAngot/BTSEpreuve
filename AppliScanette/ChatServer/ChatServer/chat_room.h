#ifndef CHAT_ROOM_H_INCLUDED
#define CHAT_ROOM_H_INCLUDED
#include "chat_participant.h"
#include <set>

class chat_room
{
public:
    void join(chat_participant_ptr participant);
    void leave(chat_participant_ptr participant);
    void deliver(const chat_message& msg);

private:
    std::set<chat_participant_ptr> participants_;
    enum { max_recent_msgs = 100 };
    chat_message_queue recent_msgs_;

};

#endif // CHAT_ROOM_H_INCLUDED
