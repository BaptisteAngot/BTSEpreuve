#include "chat_message.h"
#include <cstdio>
#include <cstring>
#include <cstdlib>
#include <stdio.h>

using namespace std;

void chat_message::body_length(/*std::size_t new_length*/)
{
    body_length_ = new_length;
    if (body_length_ > max_body_length)
      body_length_ = max_body_length;
}


bool chat_message::decode_header()
{
    char header[header_length + 1] = "";
    std::strncat(header, data_, header_length);
    body_length_ = std::atoi(header);
    if (body_length_ > max_body_length)
    {
      body_length_ = 0;
      return false;
    }
    return true;
}

void chat_message::encode_header()
{
    char header[header_length + 1] = "";
    std::sprintf(header, "%4d", static_cast<int>(body_length_));
    std::memcpy(data_, header, header_length);
}

size_t chat_message::body_length()
{
    return body_length_;
}

char* chat_message::body()
{
    return data_ + header_length;
}

const char* chat_message::body() const
{
    return data_ + header_length;
}

std::size_t chat_message::length() const
{
    return header_length + body_length_;
}

char* chat_message::data()
{
    return data_;
}

const char* chat_message::data() const
{
    return data_;
}
